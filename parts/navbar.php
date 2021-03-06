<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <a href="/" class="my-0 mr-md-auto font-weight-normal">ITC</a>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="/">Departments</a>
        <?php if (GUEST) : ?>
            <a class="btn btn-success" href="/login.php">Login</a>
            <a class="btn btn-outline-primary" href="/sign-up.php">Sign up</a>
        <?php else : ?>
            <a class="btn btn-danger" href="/logout.php">Logout</a>
        <?php endif; ?>
    </nav>
</div>