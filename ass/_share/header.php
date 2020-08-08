<header class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="<?= BASE_URL ?>">Trang chủ</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= BASE_URL . 'danh-muc.php'?>">Danh mục<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sản phẩm</a>
                </li>
                <?php if(isset($_SESSION['auth']) && !empty($_SESSION['auth'])): ?>
                    <li>
                        <a href="javascript:;" class="nav-link">
                            Hello, <?= $_SESSION['auth']['name'] ?>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="<?= BASE_URL. "logout.php"?>">Đăng xuất</a> 
                    </li>
                <?php endif?>
            </ul>
        </div>
    </nav>
</header>