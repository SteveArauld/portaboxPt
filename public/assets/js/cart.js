/**
 * PORTA BOX SOLUTIONS - Panier (localStorage)
 * Gestion globale du panier sur l'ensemble du site.
 */
(function () {
    'use strict';

    var STORAGE_KEY = 'pbs_cart_v1';

    function getConfig() {
        var root = document.getElementById('pbs-cart-root');
        var d = root ? root.dataset : {};
        return {
            cartUrl: d.cartUrl || '/carrello',
            checkoutUrl: d.checkoutUrl || '/cassa',
            currency: d.currency || '€',
            emptyText: d.emptyText || 'Votre panier est vide.',
            addedText: d.addedText || 'Produit ajouté au panier'
        };
    }

    function read() {
        try {
            var data = JSON.parse(localStorage.getItem(STORAGE_KEY));
            return Array.isArray(data) ? data : [];
        } catch (e) {
            return [];
        }
    }

    function write(items) {
        localStorage.setItem(STORAGE_KEY, JSON.stringify(items));
        document.dispatchEvent(new CustomEvent('cart:updated', { detail: items }));
    }

    function formatPrice(n) {
        var cfg = getConfig();
        var num = Number(n) || 0;
        var formatted = num.toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ',');
        return formatted + ' ' + cfg.currency;
    }

    var Cart = {
        items: read,

        count: function () {
            return read().reduce(function (sum, it) { return sum + (parseInt(it.quantity, 10) || 0); }, 0);
        },

        total: function () {
            return read().reduce(function (sum, it) {
                return sum + (parseFloat(it.price) || 0) * (parseInt(it.quantity, 10) || 0);
            }, 0);
        },

        add: function (product, qty) {
            qty = parseInt(qty, 10) || 1;
            var items = read();
            var existing = items.find(function (it) { return String(it.id) === String(product.id); });
            if (existing) {
                existing.quantity = (parseInt(existing.quantity, 10) || 0) + qty;
            } else {
                items.push({
                    id: product.id,
                    name: product.name,
                    price: parseFloat(product.price) || 0,
                    slug: product.slug || '',
                    sku: product.sku || '',
                    image: product.image || '',
                    url: product.url || '',
                    quantity: qty
                });
            }
            write(items);
        },

        setQty: function (id, qty) {
            qty = parseInt(qty, 10) || 1;
            if (qty < 1) qty = 1;
            var items = read();
            var item = items.find(function (it) { return String(it.id) === String(id); });
            if (item) {
                item.quantity = qty;
                write(items);
            }
        },

        remove: function (id) {
            var items = read().filter(function (it) { return String(it.id) !== String(id); });
            write(items);
        },

        clear: function () {
            write([]);
        },

        format: formatPrice
    };

    window.Cart = Cart;

    /* ---------- UI : badge, tiroir, toast ---------- */

    function updateBadge() {
        var count = Cart.count();
        document.querySelectorAll('.pbs-cart-count').forEach(function (el) {
            el.textContent = count;
            el.style.display = count > 0 ? 'flex' : 'none';
        });
    }

    function renderDrawer() {
        var cfg = getConfig();
        var list = document.getElementById('pbs-drawer-items');
        var totalEl = document.getElementById('pbs-drawer-total');
        var footer = document.getElementById('pbs-drawer-footer');
        if (!list) return;

        var items = read();

        if (items.length === 0) {
            list.innerHTML = '<div class="pbs-drawer-empty">' +
                '<div class="pbs-drawer-empty-ico"><i class="fas fa-cart-shopping"></i></div>' +
                '<p>' + cfg.emptyText + '</p></div>';
            if (footer) footer.style.display = 'none';
            return;
        }

        if (footer) footer.style.display = 'block';

        list.innerHTML = items.map(function (it) {
            var img = it.image
                ? '<img src="' + it.image + '" alt="" onerror="this.src=\'https://via.placeholder.com/80x80?text=No+Image\'">'
                : '<img src="https://via.placeholder.com/80x80?text=No+Image" alt="">';
            return '<div class="pbs-drawer-item" data-id="' + it.id + '">' +
                '<div class="pbs-drawer-thumb">' + img + '</div>' +
                '<div class="pbs-drawer-info">' +
                '<a class="pbs-drawer-name" href="' + (it.url || '#') + '">' + it.name + '</a>' +
                '<div class="pbs-drawer-price">' + formatPrice(it.price) + '</div>' +
                '<div class="pbs-qty">' +
                '<button type="button" class="pbs-qty-btn" data-action="dec" data-id="' + it.id + '"><i class="fas fa-minus"></i></button>' +
                '<span class="pbs-qty-val">' + it.quantity + '</span>' +
                '<button type="button" class="pbs-qty-btn" data-action="inc" data-id="' + it.id + '"><i class="fas fa-plus"></i></button>' +
                '</div>' +
                '</div>' +
                '<button type="button" class="pbs-drawer-remove" data-action="remove" data-id="' + it.id + '" aria-label="Supprimer"><i class="fas fa-times"></i></button>' +
                '</div>';
        }).join('');

        if (totalEl) totalEl.textContent = formatPrice(Cart.total());
    }

    function openDrawer() {
        var drawer = document.getElementById('pbs-drawer');
        var overlay = document.getElementById('pbs-drawer-overlay');
        if (!drawer) return;
        renderDrawer();
        drawer.classList.add('open');
        if (overlay) overlay.classList.add('open');
        document.body.style.overflow = 'hidden';
    }

    function closeDrawer() {
        var drawer = document.getElementById('pbs-drawer');
        var overlay = document.getElementById('pbs-drawer-overlay');
        if (drawer) drawer.classList.remove('open');
        if (overlay) overlay.classList.remove('open');
        document.body.style.overflow = '';
    }

    window.PBSCart = { open: openDrawer, close: closeDrawer, renderDrawer: renderDrawer };

    var toastTimer = null;
    function toast(message) {
        var el = document.getElementById('pbs-toast');
        if (!el) {
            el = document.createElement('div');
            el.id = 'pbs-toast';
            el.className = 'pbs-toast';
            document.body.appendChild(el);
        }
        el.innerHTML = '<span class="pbs-toast-ico"><i class="fas fa-check"></i></span> ' + message;
        el.classList.add('show');
        clearTimeout(toastTimer);
        toastTimer = setTimeout(function () { el.classList.remove('show'); }, 2600);
    }

    /* ---------- Liaisons d'événements ---------- */

    document.addEventListener('click', function (e) {
        // Ajouter au panier
        var addBtn = e.target.closest('[data-add-to-cart]');
        if (addBtn) {
            e.preventDefault();
            var cfg = getConfig();
            var qtyField = addBtn.getAttribute('data-qty-target');
            var qty = 1;
            if (qtyField) {
                var qInput = document.querySelector(qtyField);
                if (qInput) qty = parseInt(qInput.value, 10) || 1;
            }
            Cart.add({
                id: addBtn.getAttribute('data-id'),
                name: addBtn.getAttribute('data-name'),
                price: addBtn.getAttribute('data-price'),
                slug: addBtn.getAttribute('data-slug'),
                sku: addBtn.getAttribute('data-sku'),
                image: addBtn.getAttribute('data-image'),
                url: addBtn.getAttribute('data-url')
            }, qty);

            addBtn.classList.add('pbs-added');
            setTimeout(function () { addBtn.classList.remove('pbs-added'); }, 1200);
            toast(cfg.addedText);

            if (addBtn.hasAttribute('data-open-drawer')) {
                openDrawer();
            }
            return;
        }

        // Ouvrir le tiroir
        var toggle = e.target.closest('[data-cart-toggle]');
        if (toggle) {
            e.preventDefault();
            openDrawer();
            return;
        }

        // Fermer le tiroir
        if (e.target.closest('[data-cart-close]') || e.target.id === 'pbs-drawer-overlay') {
            e.preventDefault();
            closeDrawer();
            return;
        }

        // Actions sur les lignes du tiroir
        var actionBtn = e.target.closest('[data-action]');
        if (actionBtn && actionBtn.closest('#pbs-drawer')) {
            var id = actionBtn.getAttribute('data-id');
            var action = actionBtn.getAttribute('data-action');
            var current = read().find(function (it) { return String(it.id) === String(id); });
            if (action === 'inc' && current) Cart.setQty(id, (parseInt(current.quantity, 10) || 1) + 1);
            if (action === 'dec' && current) Cart.setQty(id, (parseInt(current.quantity, 10) || 1) - 1);
            if (action === 'remove') Cart.remove(id);
            renderDrawer();
        }
    });

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') closeDrawer();
    });

    document.addEventListener('cart:updated', function () {
        updateBadge();
        renderDrawer();
    });

    document.addEventListener('DOMContentLoaded', function () {
        updateBadge();
        renderDrawer();
    });
})();
