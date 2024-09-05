<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    .product {
      border: 1px solid #ccc;
      padding: 10px;
      margin-bottom: 20px;
      width: 200px;
    }
    .product-img {
      width: 100%;
      height: 200px;
      background: url('path_to_your_product_image.jpg') center/cover no-repeat;
    }
    .product-info {
      text-align: center;
    }
    .sizes {
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <div class="product">
    <div class="product-img"></div>
    <div class="product-info">
      <h2>Tên sản phẩm: Giày</h2>
      <p>Mô tả sản phẩm: (Thêm mô tả sản phẩm ở đây)</p>
      <div class="sizes">
        <h3>Các kích cỡ có sẵn:</h3>
        <ul>
          <li>Size 36 <button onclick="addToCart('36')">Thêm vào giỏ hàng</button></li>
          <li>Size 37 <button onclick="addToCart('37')">Thêm vào giỏ hàng</button></li>
          <li>Size 38 <button onclick="addToCart('38')">Thêm vào giỏ hàng</button></li>
          <li>Size 39 <button onclick="addToCart('39')">Thêm vào giỏ hàng</button></li>
        </ul>
      </div>
    </div>
  </div>

  <script>
    function addToCart(size) {
      alert('Bạn đã thêm size ' + size + ' vào giỏ hàng');
      // Viết mã xử lý thêm sản phẩm vào giỏ hàng ở đây
    }
  </script>
</body>
</html>
