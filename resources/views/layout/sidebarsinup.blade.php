<aside id="sidebar-signup" class="light-mode closed">
    <div class="d-flex flex-column align-items-center">
        <button id="close-btn1" type="button">
            <i class="lni lni-cross-circle"></i>
        </button>
        <div class="profile-icon">
            <img src="File/1-12.png" alt="" width="60px" height="65px">
        </div>
        <hr class="hr1">
        <div class="sidebar-logo text-center" style="margin-bottom: 50px">
            <h2> CREATE ACCOUNT </h2>
        </div>

        <form id="signupForm" class="signup-form" action="/signup" method="POST">
            @csrf
            <div class="form-group d-flex justify-content-between">
                <div class="input-container" style="width: 48%;">
                    <input type="text" class="form-control" id="first-name" name="firstName"
                        placeholder=" *First Name " required>
                </div>
                <div class="input-container" style="width: 48%;">
                    <input type="text" class="form-control" id="last-name" name="lastName" placeholder=" *Last Name "
                        required>
                </div>
            </div>
            <div class="form-group input-container">
                <input type="text" class="form-control" id="email-address" name="email"
                    placeholder=" *your email address " required>
            </div>
            <div class="form-group input-container">
                <input type="text" class="form-control" id="Phone-no" name="phone" placeholder=" *youre Phone no "
                    required>
            </div>
            <div class="form-group input-container">
                <input type="text" class="form-control" id="password" name="password"
                    placeholder=" *youre password " required>
            </div>
            <button type="submit" class="btn btn-primary mt-3" id="signup-submit"> SINUP </button>
        </form>
        <div class="loading-message" id="loadingMessage">
            <div class="loader"></div>
            <p>Account is being created</p>
        </div>
    </div>
</aside>
