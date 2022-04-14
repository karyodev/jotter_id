<div class="col-md-4">
    <div class="account-information">
        <div class="profile-thumb">
            <img src="assets/img/account.jpg" alt="account holder image">
            <h3>{{ $user->nama }}</h3>
            <small><i>Bergabung sejak <b>{{ date('d F Y', strtotime($user->created_user)) }}</b></i></small>
        </div>
        <div class="profile-thumb">
            <a href="/content"> <button class="btn btn-dark rounded-0 px-4">  <i class="bx bx-edit mr-2"></i>Buat Tulisan</button></a>
        </div>

        <ul>
            <li>
                <a href="/account" class="active">
                    <i class='bx bx-user'></i>
                    Profil
                </a>
            </li>
            <li>
                <a href="/post">
                    <i class='bx bx-file'></i>
                    Daftar Tulisan
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-star'></i>
                    Berlangganan
                </a>
            </li>
            <li>
                <a href="/tags">
                    <i class='bx bx-tag'></i>
                    Tags
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-log-out'></i>
                    Log Out
                </a>
            </li>
        </ul>
    </div>
</div>
