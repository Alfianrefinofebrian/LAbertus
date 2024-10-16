document.getElementById('FormLogin').addEventListener('submit', function(event){
    event.preventDefault();

    const correctUsername = 'alfian';
    const correctPassword = 'katasandi123';

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    if(username === correctUsername && password === correctPassword){
        alert('succes');
        window.location.href='index.html';
    }else{
        alert('Login gagal');
    }
});