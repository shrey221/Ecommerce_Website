let cartCount = 0;
function addToCart() {
    cartCount++;
    const cartCountElement = document.getElementById('cartCount');
    cartCountElement.innerText = cartCount;
}

document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    var p=document.getElementById('butt_p');
    if (username === 'shrey' && password === 'christ') {
        alert('Login successful!');
        window.location.href = 'index.html';

    } else {
        alert('Invalid login credentials. Please try again.');
    }
});
