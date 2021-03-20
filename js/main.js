$(document).ready(function() {

    // Toggle forms system
    
    $("#forgot-btn").click(function() {
        document.getElementById('login-frm').reset()
        $("#alert").hide()
        $("#login-box").hide()
        $("#forgot-box").show()
    })
    
    $("#back-btn").click(function() {
        document.getElementById("forgot-frm").reset()
        $("#alert").hide()
        $("#forgot-box").hide()
        $("#login-box").show()
    })
    
    $("#register-btn").click(function() {
        document.getElementById("login-frm").reset()
        $("#alert").hide()
        $("#register-box").show()
        $("#login-box").hide()
    })
    
    $("#login-btn").click(function() {
        document.getElementById('register-frm').reset()
        $("#alert").hide()
        $("#register-box").hide()
        $("#login-box").show()
    })

    // Validations

    $("#login-frm").validate()

    $("#register-frm").validate({
        rules: {
            cpass: {
                equalTo: "#pass"
            }
        }
    })

    $("#forgot-frm").validate()

    // submit form without page refresh

    $("#register").click(function(e) {
        if(document.getElementById('register-frm').checkValidity()) {
            e.preventDefault()
            $.ajax({
                url: 'action.php',
                method: 'post',
                data: $("#register-frm").serialize()+'&action=register',
                success: function(response) {
                    if(response == "ok") {
                        $('#banner').removeClass("alert-danger").addClass("alert-success")
                        $("#alert").show()
                        $("#result").html("Congratulations! Your account has been created successfully")
                        document.getElementById('register-frm').reset()
                    } else if(response == "error") {
                        $('#banner').removeClass("alert-success").addClass("alert-danger")
                        $("#alert").show()
                        $("#result").html("Something went wrong. Please try again. If the error persists contact sysadmin")
                    }
                    
                }
            })
        }
        return true
    })

    // Login form

    $("#login").click(function(e) {
        if(document.getElementById('login-frm').checkValidity()) {
            e.preventDefault()
            $.ajax({
                url: 'action.php',
                method: 'post',
                data: $("#login-frm").serialize()+'&action=login',
                success: function(response) {
                    if(response == "ok") {
                        document.getElementById('login-frm').reset()
                        $('#banner').removeClass("alert-danger").addClass("alert-success")
                        $("#alert").show()
                        $("#result").html("Congratulations! You are now logged in")
                    } else if (response == "error") {
                        $('#banner').removeClass("alert-success").addClass("alert-danger")
                        $("#alert").show()
                        $("#result").html("Sorry, you are not registered in our system.")
                    }
                    
                }
            })
        }
        return true
    })

    $("#forgot").click(function(e) {
        if(document.getElementById('forgot-frm').checkValidity()) {
            e.preventDefault()
            $.ajax({
                url: 'action.php',
                method: 'post',
                data: $("#forgot-frm").serialize()+'&action=forgot',
                success: function(response) {
                    $("#alert").show()
                    $("#result").html(response)
                }
            })
        }
        return true
    })

})