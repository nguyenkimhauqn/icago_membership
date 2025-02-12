@if(isset($customer))
    <p>Mã khách hàng: {{ $customer->customer_code }}</p>
    <p>Số điện thoại: {{ $customer->phone }}</p>
    <p>Tên khách hàng: {{ $customer->name }}</p>
    <p>Điểm tích lũy: {{ $customer->points }}</p>
    <p>Hạng: {{ $customer->rank }}</p>
    <p>Số người đã giới thiệu: {{ $customer->referrer_count }}</p>
@else
    <p>Không tìm thấy khách hàng.</p>
@endif
