<!DOCTYPE html>
<html>
<head>
    <title>Invoice #{{ $order->id }}</title>
    <style>
        body { font-family: sans-serif; color: #333; }
        .invoice-box { max-width: 800px; margin: auto; padding: 30px; }
        .title { font-size: 24px; font-weight: bold; color: #111; }
        table { width: 100%; line-height: inherit; text-align: left; border-collapse: collapse; margin-top: 20px; }
        table th { background: #f4f4f4; padding: 8px; font-size: 14px; }
        table td { padding: 8px; border-bottom: 1px solid #eee; font-size: 14px; }
        .total-row { font-weight: bold; background: #fafafa; }
    </style>
</head>
<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr>
                <td class="title">YANS & CO.</td>
                <td style="text-align: right;">
                    Invoice #: {{ $order->id }}<br>
                    Tanggal: {{ $order->created_at->format('d M Y') }}<br>
                    Status: <strong>{{ strtoupper($order->payment_status) }}</strong>
                </td>
            </tr>
        </table>

        <div style="margin-top: 30px;">
            <strong>Tujuan Pengiriman:</strong><br>
            {{ $order->shipping_address }}
        </div>

        <table>
            <thead>
                <tr>
                    <th>Produk Bag</th>
                    <th>Harga</th>
                    <th>Qty</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                @foreach($order->items as $item)
                <tr>
                    <td>{{ $item->product->nama }}</td>
                    <td>Rp {{ number_format($item->price, 0, ',', '.') }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>Rp {{ number_format($item->price * $item->quantity, 0, ',', '.') }}</td>
                </tr>
                @endforeach
                <tr class="total-row">
                    <td colspan="3" style="text-align: right;">Total Bayar:</td>
                    <td>Rp {{ number_format($order->total_harga, 0, ',', '.') }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>