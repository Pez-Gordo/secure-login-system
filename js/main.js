$(document).ready(function() {
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
})