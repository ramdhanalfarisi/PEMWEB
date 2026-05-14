<nav class="navbar navbar-expand-lg bg-dark navbar-dark">

    <div class="container-fluid">

        <a class="navbar-brand" href="index.php">My Profile</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav me-auto">

                <li class="nav-item">
                    <a class="nav-link" href="index.php?hal=home">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.php?hal=about">About Me</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="index.php?hal=contact">Contact Me</a>
                </li>

                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">

                        My Studies

                    </a>

                    <ul class="dropdown-menu">

                        <li>
                            <a class="dropdown-item" href="index.php?hal=level_list">

                                Level

                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="index.php?hal=studies_list">

                                Studies

                            </a>
                        </li>

                    </ul>

                </li>

            </ul>

            <ul class="navbar-nav">

                <?php
                if (!isset($_SESSION['MEMBER'])) {
                ?>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php?hal=login">

                            Login

                        </a>
                    </li>

                <?php
                } else {
                ?>

                    <li class="nav-item dropdown">

                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">

                            <?= $_SESSION['MEMBER']['username']; ?>

                            <?php
                            if (isset($_SESSION['MEMBER']['role'])) {
                                echo " - " . $_SESSION['MEMBER']['role'];
                        }
                        ?>

                        </a>

                        <ul class="dropdown-menu">

                            <li>
                                <a class="dropdown-item" href="logout.php">

                                    Logout

                                </a>
                            </li>

                        </ul>

                    </li>

                <?php } ?>

            </ul>

        </div>
    </div>
</nav>