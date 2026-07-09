<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('email.inquiry_confirmation_title') }}</title>
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
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
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

        .header h2 {
            margin: 10px 0 5px;
            font-size: 28px;
            font-weight: 600;
            letter-spacing: -0.5px;
        }

        .order-badge {
            display: inline-block;
            background: rgba(255, 255, 255, 0.2);
            padding: 8px 20px;
            border-radius: 50px;
            font-size: 14px;
            margin-top: 10px;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .content {
            padding: 40px 35px;
            background: #ffffff;
        }

        .greeting {
            font-size: 18px;
            margin-bottom: 20px;
            color: #1e3c72;
        }

        .order-summary {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 20px;
            margin: 25px 0;
        }

        .summary-title {
            font-size: 18px;
            color: #1e3c72;
            font-weight: 600;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 2px solid #e2e8f0;
        }

        .order-details {
            margin-bottom: 20px;
        }

        .detail-row {
            display: flex;
            justify-content: space-between;
            padding: 12px 0;
            border-bottom: 1px dashed #e2e8f0;
        }

        .detail-label {
            color: #64748b;
            font-weight: 500;
        }

        .detail-value {
            font-weight: 600;
            color: #1e3c72;
        }

        .product-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 15px;
            margin: 15px 0;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.02);
        }

        .product-name {
            font-size: 18px;
            font-weight: 600;
            color: #1e3c72;
            margin-bottom: 10px;
        }

        .product-meta {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
            margin-top: 10px;
        }

        .meta-item {
            background: #f8fafc;
            padding: 8px;
            border-radius: 6px;
            text-align: center;
        }

        .meta-label {
            font-size: 12px;
            color: #64748b;
            display: block;
            margin-bottom: 4px;
        }

        .meta-value {
            font-weight: 700;
            color: #1e3c72;
            font-size: 16px;
        }

        .total-section {
            background: linear-gradient(135deg, #f8fafc 0%, #ffffff 100%);
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
        }

        .total-row {
            display: flex;
            justify-content: space-between;
            padding: 8px 0;
            font-size: 16px;
        }

        .grand-total {
            display: flex;
            justify-content: space-between;
            padding: 15px 0 5px;
            margin-top: 10px;
            border-top: 2px solid #1e3c72;
            font-size: 20px;
            font-weight: 700;
            color: #1e3c72;
        }

        .info-box {
            background: #ebf8ff;
            padding: 20px;
            border-radius: 8px;
            margin: 25px 0;
            border: 1px solid #bee3f8;
        }

        .info-title {
            color: #2c5282;
            font-weight: 600;
            margin-bottom: 10px;
            font-size: 16px;
        }

        .button-container {
            text-align: center;
            margin: 35px 0 20px;
        }

        .shop-btn {
            display: inline-block;
            padding: 14px 32px;
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            color: #ffffff;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 16px;
            transition: transform 0.2s, box-shadow 0.2s;
            box-shadow: 0 4px 6px rgba(30, 60, 114, 0.2);
        }

        .shop-btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 6px 12px rgba(30, 60, 114, 0.3);
        }

        .footer {
            padding: 30px 35px;
            background: #f8fafc;
            border-top: 1px solid #e9ecef;
            font-size: 14px;
            color: #718096;
        }

        .contact-info {
            margin-bottom: 15px;
        }

        .copyright {
            text-align: center;
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #e2e8f0;
            color: #a0aec0;
        }

        @media only screen and (max-width: 600px) {
            .content, .footer {
                padding: 30px 20px;
            }

            .detail-row {
                flex-direction: column;
                gap: 5px;
            }

            .product-meta {
                grid-template-columns: 1fr;
            }

            .button-container a {
                display: block;
                margin: 10px 0;
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
                <img src="{{ asset('/assets/uploads/2024/07/PORTABOX-SOLUTION-2560x822-1.png') }}" alt="{{ config('app.name') }}" style="max-width: 180px;">
            </div>
            <h2>✅ {{ __('email.inquiry_confirmed') }}</h2>
            <div class="order-badge">
                {{ __('email.inquiry_number') }}: <strong>#{{ $order_number ?? 'INQ-' . date('Ymd') . '-' . rand(1000, 9999) }}</strong>
            </div>
        </div>

        <div class="content">
            <div class="greeting">
                <strong>{{ __('email.dear_customer', ['name' => $name]) }}</strong>
            </div>

            <p style="font-size: 16px; color: #4a5568;">{{ __('email.inquiry_received', ['product' => $product_name]) }}</p>

            <div class="order-summary">
                <div class="summary-title">📋 {{ __('email.inquiry_summary') }}</div>

                <div class="order-details">
                    <div class="detail-row">
                        <span class="detail-label">{{ __('email.inquiry_date') }}</span>
                        <span class="detail-value">{{ $order_date ?? date('d/m/Y H:i') }}</span>
                    </div>
                    <div class="detail-row">
                        <span class="detail-label">{{ __('email.inquiry_status') }}</span>
                        <span class="detail-value" style="color: #28a745;">✅ {{ __('email.received') }}</span>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-name">{{ $product_name }}</div>
                    <div class="product-meta">
                        <div class="meta-item">
                            <span class="meta-label">SKU</span>
                            <span class="meta-value">{{ $product_sku }}</span>
                        </div>
                        <div class="meta-item">
                            <span class="meta-label">{{ __('email.quantity') }}</span>
                            <span class="meta-value">{{ $quantity }}</span>
                        </div>
                    </div>
                </div>

                <div class="info-box">
                    <div class="info-title">📍 {{ __('email.location_info') }}</div>
                    <p style="margin: 0; color: #2d3748;">
                        <strong>{{ __('email.country') }}:</strong> {{ $country ?? __('email.not_specified') }}<br>
                        <strong>{{ __('email.region') }}:</strong> {{ $region ?? __('email.not_specified') }}<br>
                        <strong>{{ __('email.phone') }}:</strong> {{ $phone ?? __('email.not_specified') }}
                    </p>
                </div>
            </div>

            @if(!empty($inquiry_message))
            <div class="info-box" style="background: #f0f9ff;">
                <div class="info-title">💬 {{ __('email.your_message') }}</div>
                <p style="margin: 0; color: #2d3748; font-style: italic;">
                    "{{ $inquiry_message }}"
                </p>
            </div>
            @endif

            <div class="info-box">
                <div class="info-title">📬 {{ __('email.next_steps') }}</div>
                <ul style="margin: 0; padding-left: 20px; color: #2d3748;">
                    <li>{{ __('email.step_review') }}</li>
                    <li>{{ __('email.step_contact') }}</li>
                    <li>{{ __('email.step_quote') }}</li>
                    <li>{{ __('email.step_followup') }}</li>
                </ul>
            </div>

            <p style="font-size: 18px; color: #1e3c72; text-align: center; margin: 30px 0;">{{ __('email.thank_you_inquiry') }}</p>

            <div class="button-container">
                <a href="{{ route('shop') }}" class="shop-btn">
                    🛍️ {{ __('email.continue_shopping') }}
                </a>
            </div>
        </div>

        <div class="footer">
            <div class="contact-info">
                <table width="100%" cellpadding="0" cellspacing="0" style="width: 100%;">
                    <tr>
                        <td style="padding: 5px 0; color: #1e3c72;">
                            <strong>{{ config('app.name') }}</strong>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 5px 0; color: #718096;">
                            📧 {{ config('mail.from.address') }}
                        </td>
                    </tr>
                    @if(config('app.phone'))
                    <tr>
                        <td style="padding: 5px 0; color: #718096;">
                            📞 {{ config('app.phone') }}
                        </td>
                    </tr>
                    @endif
                </table>
            </div>

            <div class="copyright">
                © {{ date('Y') }} {{ config('app.name') }}. {{ __('email.all_rights_reserved') }}
            </div>
        </div>
    </div>
</body>
</html>
