@include("layots.header")
@include("layots.footer")
@include("layots.head")
    <!DOCTYPE html>
<html lang="en">
<head>
    @yield("head")
    <title>BITLIST</title>

</head>
<body>
@yield("header")
<main>
    <section class="container auth_section">
        <form class="auth_container" id="login-form" method="post">
            @csrf
            <input name="email" class="main__input" placeholder="Enter email">
            <span id="email-error" class="red" hidden=""></span>
            <input name="password" type="password" class="main__input" placeholder="Enter password">
            <span id="password-error" class="red" hidden=""></span>
            <button type="submit" class="btn btn-primary">Log in</button>
            <span id="success" class="green" hidden=""></span>
        </form>


    </section>

</main>
@yield("footer")
<script>
    const login = document.getElementById("login-form");
    login.addEventListener("submit",(e) =>{
        e.preventDefault();
        const email_error = document.getElementById("email-error");
        email_error.hidden = true;
        const password_error = document.getElementById("password-error");
        password_error.hidden = true;

        const formData = new FormData(login);
        $.ajax({
            url: '{{route("login")}}',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function (data) {
                const success = document.getElementById("success");
                success.hidden = false;
                success.innerText = "You have successfully login";
                window.location.href = '{{route("main")}}';
            },
            error: function (data) {
                const errors = data.responseJSON.errors;
                Object.keys(errors).forEach((fieldName) => {
                    const errorMessages = errors[fieldName];
                    errorMessages.forEach((errorMessage) => {
                        const errorField = document.getElementById(fieldName + "-error");
                        errorField.hidden = false;
                        errorField.innerText = errorMessage;
                    });
                });
            }

        })

    } )
</script>
</body>
</html>
