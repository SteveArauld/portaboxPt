<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouvelle demande - {{ config('app.name') }}</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #2d3748;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f6f9;
        }

        .email-container {
            background: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05), 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .header {
            background: linear-gradient(135deg, #2c3e50 0%, #3498db 100%);
            color: #ffffff;
            padding: 30px 20px;
            text-align: center;
        }

        .logo {
            margin-bottom: 15px;
        }

        .logo img {
            max-width: 180px;
            height: auto;
        }

        .badge-admin {
            display: inline-block;
            background: rgba(255, 255, 255, 0.2);
            padding: 8px 20px;
            border-radius: 50px;
            font-size: 14px;
            margin-top: 10px;
            border: 1px solid rgba(255, 255, 255, 0.3);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .header h2 {
            margin: 15px 0 5px;
            font-size: 28px;
            font-weight: 600;
        }

        .content {
            padding: 40px 35px;
            background: #ffffff;
        }

        .alert-banner {
            background: #fef2f2;
            border: 1px solid #fee2e2;
            border-radius: 8px;
            padding: 15px 20px;
            margin-bottom: 30px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .alert-icon {
            font-size: 24px;
        }

        .alert-text {
            color: #991b1b;
            font-weight: 600;
            font-size: 16px;
        }

        .section-title {
            font-size: 18px;
            color: #2c3e50;
            font-weight: 600;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #e2e8f0;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .info-card {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 25px;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .info-item {
            padding: 10px;
            background: #ffffff;
            border-radius: 8px;
            border: 1px solid #edf2f7;
        }

        .info-label {
            font-size: 12px;
            text-transform: uppercase;
            color: #64748b;
            letter-spacing: 0.5px;
            margin-bottom: 5px;
            display: block;
        }

        .info-value {
            font-size: 18px;
            font-weight: 600;
            color: #2c3e50;
        }

        .info-value.small {
            font-size: 16px;
        }

        .product-detail {
            background: #ffffff;
            border: 2px solid #edf2f7;
            border-radius: 10px;
            padding: 20px;
            margin: 20px 0;
        }

        .product-name {
            font-size: 20px;
            font-weight: 700;
            color: #2c3e50;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 2px dashed #e2e8f0;
        }

        .product-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            text-align: center;
        }

        .stat-item {
            background: #f8fafc;
            padding: 15px 10px;
            border-radius: 8px;
        }

        .stat-label {
            font-size: 12px;
            color: #64748b;
            text-transform: uppercase;
            margin-bottom: 5px;
            display: block;
        }

        .stat-value {
            font-size: 24px;
            font-weight: 700;
            color: #2c3e50;
        }

        .stat-value.sku {
            font-size: 14px;
            font-family: monospace;
            background: #e2e8f0;
            padding: 4px 8px;
            border-radius: 4px;
            display: inline-block;
        }

        .message-box {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 20px;
            margin: 25px 0;
            border-left: 4px solid #3498db;
        }

        .message-header {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 15px;
        }

        .message-header strong {
            font-size: 16px;
            color: #2c3e50;
        }

        .message-content {
            background: #f8fafc;
            padding: 20px;
            border-radius: 8px;
            font-style: italic;
            color: #4a5568;
            margin: 0;
            line-height: 1.8;
            border: 1px solid #edf2f7;
        }

        .button-container {
            text-align: center;
            margin: 35px 0 20px;
        }

        .product-link {
            display: inline-block;
            padding: 14px 32px;
            background: linear-gradient(135deg, #2c3e50 0%, #3498db 100%);
            color: #ffffff;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 16px;
            transition: transform 0.2s, box-shadow 0.2s;
            box-shadow: 0 4px 6px rgba(44, 62, 80, 0.2);
        }

        .product-link:hover {
            transform: translateY(-1px);
            box-shadow: 0 6px 12px rgba(44, 62, 80, 0.3);
        }

        .footer {
            padding: 30px 35px;
            background: #f8fafc;
            border-top: 1px solid #e9ecef;
            font-size: 14px;
            color: #718096;
        }

        .meta-info {
            font-size: 12px;
            color: #94a3b8;
            text-align: center;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #e2e8f0;
        }

        .timestamp {
            font-family: monospace;
            background: #e2e8f0;
            padding: 2px 6px;
            border-radius: 4px;
        }

        @media only screen and (max-width: 600px) {
            .content, .footer {
                padding: 30px 20px;
            }

            .info-grid, .product-stats {
                grid-template-columns: 1fr;
            }

            .header h2 {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <div class="logo">
                <img src="{{ asset('/assets/uploads/2024/07/Porto-Contentores-2560x822-1.png') }}" alt="{{ config('app.name') }}" style="max-width: 180px;">
            </div>
            <div class="badge-admin">🔔 ADMIN NOTIFICATION</div>
            <h2> NOUVELLE DEMANDE CLIENT</h2>
        </div>

        <div class="content">
            <div class="alert-banner">
                <span class="alert-icon">⚠️</span>
                <span class="alert-text">Une nouvelle demande de devis vient d'être soumise sur le site</span>
            </div>

            <div class="section-title">
                <span>👤 INFORMATIONS CLIENT</span>
            </div>

            <div class="info-card">
                <div class="info-grid">
                    <div class="info-item">
                        <span class="info-label">Nom complet</span>
                        <span class="info-value">{{ $name }}</span>
                    </div>

                    <div class="info-item">
                        <span class="info-label">Adresse email</span>
                        <span class="info-value small">{{ $email }}</span>
                    </div>

                    @if(!empty($phone))
                    <div class="info-item">
                        <span class="info-label">Téléphone</span>
                        <span class="info-value">{{ $phone }}</span>
                    </div>
                    @endif

                    @if(!empty($country))
                    <div class="info-item">
                        <span class="info-label">Pays</span>
                        <span class="info-value">{{ $country }}</span>
                    </div>
                    @endif

                    @if(!empty($region))
                    <div class="info-item">
                        <span class="info-label">Région</span>
                        <span class="info-value">{{ $region }}</span>
                    </div>
                    @endif
                </div>
            </div>

            <div class="section-title" style="margin-top: 30px;">
                <span>🛍️ DÉTAILS DU PRODUIT</span>
            </div>

            <div class="product-detail">
                <div class="product-name">{{ $product_name }}</div>

                <div class="product-stats">
                    <div class="stat-item">
                        <span class="stat-label">SKU / Référence</span>
                        <span class="stat-value sku">{{ $product_sku }}</span>
                    </div>

                    <div class="stat-item">
                        <span class="stat-label">Quantité demandée</span>
                        <span class="stat-value">{{ $quantity }}</span>
                    </div>

                    @if(!empty($unit_price))
                    <div class="stat-item">
                        <span class="stat-label">Prix unitaire</span>
                        <span class="stat-value">{{ number_format($unit_price, 2) }} €</span>
                    </div>

                    <div class="stat-item">
                        <span class="stat-label">Total estimé</span>
                        <span class="stat-value">{{ number_format($unit_price * $quantity, 2) }} €</span>
                    </div>
                    @endif
                </div>
            </div>

            @if(!empty($inquiry_message))
            <div class="message-box">
                <div class="message-header">
                    <span style="font-size: 20px;">💬</span>
                    <strong>Message du client</strong>
                </div>
                <div class="message-content">
                    "{{ $inquiry_message }}"
                </div>
            </div>
            @endif

            <div class="button-container">
                <a href="{{ $product_url }}" class="product-link">
                    🔍 VOIR LE PRODUIT DANS LA BOUTIQUE
                </a>
            </div>

            <div class="meta-info">
                <span>🕐 Demande reçue le <span class="timestamp">{{ now()->format('d/m/Y à H:i') }}</span></span>
                <br>
                <span style="display: block; margin-top: 10px;">ID de demande : #{{ $order_number ?? 'INQ-' . date('Ymd') . '-' . rand(1000, 9999) }}</span>
            </div>
        </div>

        <div class="footer">
            <div style="text-align: center;">
                <strong style="color: #2c3e50;">{{ config('app.name') }}</strong>
                <br>
                <span style="color: #718096;"> {{ config('mail.from.address') }}</span>
                @if(config('app.phone'))
                <br>
                <span style="color: #718096;"> {{ config('app.phone') }}</span>
                @endif
            </div>

            <div style="text-align: center; margin-top: 15px; color: #94a3b8;">
                <span> Notification automatique - Action requise</span>
            </div>
        </div>
    </div>
</body>
</html>


























    {{-- <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ __('email.admin_title') }}</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                line-height: 1.6;
                color: #333;
                max-width: 600px;
                margin: 0 auto;
                padding: 20px;
            }

            .header {
                background: #495057;
                color: #fff;
                padding: 20px;
                text-align: center;
                border-radius: 8px 8px 0 0;
            }

            .content {
                background: #f8f9fa;
                padding: 30px;
                border-radius: 0 0 8px 8px;
            }

            .info-row {
                margin-bottom: 15px;
                padding-bottom: 15px;
                border-bottom: 1px solid #dee2e6;
            }

            .info-label {
                font-weight: 600;
                color: #495057;
                display: block;
                margin-bottom: 5px;
            }

            .info-value {
                color: #333;
            }

            .product-link {
                display: inline-block;
                margin-top: 20px;
                padding: 10px 20px;
                background: #495057;
                color: #fff;
                text-decoration: none;
                border-radius: 5px;
            }

            .product-link:hover {
                background: #212529;
            }

            .message-box {
                background: #fff;
                padding: 15px;
                border-radius: 5px;
                border-left: 4px solid #495057;
                margin-top: 20px;
            }
        </style>
    </head>
    <body>
    <div class="header">
        <h2>{{ __('email.admin_header') }}</h2>
    </div>

    <div class="content">
        <div class="info-row">
            <span class="info-label">{{ __('email.admin_name_label') }}</span>
            <span class="info-value">{{ $name }}</span>
        </div>

        <div class="info-row">
            <span class="info-label">{{ __('email.admin_email_label') }}</span>
            <span class="info-value">{{ $email }}</span>
        </div>

        @if(!empty($phone))
            <div class="info-row">
                <span class="info-label">{{ __('email.admin_phone_label') }}</span>
                <span class="info-value">{{ $phone }}</span>
            </div>
        @endif

        <div class="info-row">
            <span class="info-label">{{ __('email.admin_product_label') }}</span>
            <span class="info-value">{{ $product_name }}</span>
        </div>

        <div class="info-row">
            <span class="info-label">{{ __('email.admin_sku_label') }}</span>
            <span class="info-value">{{ $product_sku }}</span>
        </div>

        <div class="info-row">
            <span class="info-label">{{ __('email.admin_quantity_label') }}</span>
            <span class="info-value">{{ $quantity }}</span>
        </div>

        <div class="message-box">
            <strong>{{ __('email.admin_message_label') }}</strong>
            <p>{{ $inquiry_message }}</p>
        </div>

        <a href="{{ $product_url }}" class="product-link">{{ __('email.view_product') }}</a>
    </div>
    </body>
    </html> --}}
