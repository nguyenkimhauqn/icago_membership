<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="app-url" content="{{ env('APP_URL') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Tra cứu điểm thưởng</title>
</head>

<body>
    <div id="container-search" class="container mt-5">
        <img src="http://icago.com/wp-content/uploads/2023/11/cropped-avatar-webicago.png" alt="">
        <form id="searchForm" class="d-flex">
            <div class="flex-grow-1 me-2">
                <input type="text" class="form-control" id="phone" name="phone" required
                    placeholder="Nhập số điện thoại của bạn">
            </div>
            <button type="submit" class="btn btn-primary">Tìm kiếm</button>
        </form>
        <div id="customerInfo" class="mt-4">

        </div>
        <div id="rewardForm" style="display:none;">
            <h5>Đổi điểm thưởng & Ưu đãi</h5>
            <form>
                <div class="mb-3">
                    <label for="reward" class="form-label">Chọn phần thưởng:</label>
                    <select id="reward" class="form-select">
                        <option value="discount_voucher">Voucher giảm 10%</option>
                        <option value="discount_voucher">Voucher giảm 20%</option>
                        <option value="discount_voucher">Voucher giảm 30%</option>
                        <option value="discount_voucher">Voucher giảm 40%</option>
                        <!-- Thêm các tùy chọn khác tại đây -->
                    </select>
                </div>
                <div class="mb-3">
                    <label for="pointsRequest" class="form-label">Yêu cầu điểm:</label>
                    <input type="number" id="pointsRequest" class="form-control"
                        placeholder="Nhập số điểm muốn sử dụng">
                </div>
                <button type="submit" class="btn btn-primary">Gửi Yêu Cầu</button>
            </form>
        </div>

    </div>
    <style>
        #container-search {
            display: flex;
            flex-direction: column;
            justify-items: center;
            width: 600px;
            /* text-align: center; */
        }

        #container-search input,
        #container-search input button {
            height: 50px;
        }

        #rewardForm {
            padding: 15px;
            border: solid 3px #black;
        }
    </style>
    <script>
        document.getElementById('searchForm').onsubmit = function(event) {
            event.preventDefault();
            // Hide rewardForm
            var rewardForm = document.getElementById('rewardForm');
            rewardForm.style.display = 'none';
            
            var phone = document.getElementById('phone').value;
            var baseUrl = "http://localhost/membership_source/public/";
            fetch(`${baseUrl}customer/search?phone=${phone}`)
                .then(response => response.json())
                .then(data => {
                    if (data.message) {
                        document.getElementById('customerInfo').innerHTML = 'Không tìm thấy khách hàng';
                    } else {
                        document.getElementById('customerInfo').innerHTML =
                            `<div class="container mt-4"><div class="card"><div class="card-header">Thông Tin Khách Hàng</div><div class="card-body"><p class="card-text"><strong>Mã khách hàng:</strong>${data.customer_code}</p><p class="card-text"><strong>Số điện thoại:</strong>${data.phone}</p><p class="card-text"><strong>Tên khách hàng:</strong>${data.name}</p><p class="card-text"><strong>Điểm tích lũy:</strong>${data.points}</p><p class="card-text"><strong>Hạng:</strong>${data.rank}</p><p class="card-text"><strong>Số người đã giới thiệu:</strong>${data.referrer_count}</p><div class="d-grid d-md-flex gap-2 justify-content-md-start"><button onclick='transaction(${data.id})' class="btn btn-primary me-md-2" type="button">Xem lịch sử giao dịch</button><button id="rewardButton" class="btn btn-secondary" type="button">Đổi điểm thưởng & Ưu đãi</button></div></div></div></div> <div id="transactionInfo" class="mt-4"></div>`;
                    }
                })
                .catch(error => console.error('Error:', error));


        };

        // show transactionData
        function transaction(customerId) {
            var baseUrl = "http://localhost/membership_source/public/";
            fetch(`${baseUrl}transactions/${customerId}`)
                .then(response => response.json())
                .then(data => {
                    if (data.length === 0) {
                        document.getElementById('transactionInfo').innerHTML = 'Không có lịch sử giao dịch.';
                    } else {
                        let html =
                            `<div class="card"><div class="card-body"><h5 class="card-title">Lịch Sử Giao Dịch</h5><ul class="list-group">`;
                        data.forEach(tx => {
                            html +=
                                `<li class="list-group-item">ID Giao Dịch: ${tx.transaction_id}, Ngày: ${tx.transaction_date}, Số Tiền: ${tx.total_amount}, Điểm tích lũy: ${tx.points_earned}</li>`;
                        });
                        html += `</ul></div></div>`;
                        document.getElementById('transactionInfo').innerHTML = html;
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    document.getElementById('transactionInfo').innerHTML = 'Lỗi khi tải lịch sử giao dịch.';
                });
        }

        // redeem reward points
        // Show Button
        document.getElementById('container-search').addEventListener('click', function(event) {
            var clickedElement = event.target;
            if (clickedElement.id === 'rewardButton') {
                // alert(1);
                var form = document.getElementById('rewardForm');
                if (form.style.display === 'none' || form.style.display === '') {
                    form.style.display = 'block';
                } else {
                    form.style.display = 'none';
                }
            }
            // Gửi yêu cầu sến server hoặc xử lý nội bộ
            // document.getElementById('rewardForm').style.display = 'none';
        })
    </script>
</body>

</html>
