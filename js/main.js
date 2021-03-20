$(document).ready(function() {

    // Toggle forms system
    
    $("#forgot-btn").click(function() {
        $("#login-box").hide()
        $("#forgot-box").show()
    })
    
    $("#back-btn").click(function() {
        $("#forgot-box").hide()
        $("#login-box").show()
    })
    
    $("#register-btn").click(function() {
        $("#register-box").show()
        $("#login-box").hide()
    })
    
    $("#login-btn").click(function() {
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
                    $("#alert").show()
                    $("#result").html(response)
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
                    $("#alert").show()
                    $("#result").html(response)
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