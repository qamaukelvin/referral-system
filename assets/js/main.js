
document.getElementById('switch-to-login').addEventListener('click', function(e) {
    e.preventDefault();
    document.getElementById('sign-up').classList.remove('active');
    document.getElementById('sign-up').classList.add('inactive');

    setTimeout(() => {
      document.getElementById('sign-up').classList.remove('inactive');
      document.getElementById('log-in').classList.add('active');
    }, 500);
  });
  
  document.getElementById('switch-to-signup').addEventListener('click', function(e) {
    e.preventDefault();
    document.getElementById('log-in').classList.remove('active');
    document.getElementById('log-in').classList.add('inactive');

    setTimeout(() => {
      document.getElementById('log-in').classList.remove('inactive');
      document.getElementById('sign-up').classList.add('active');
    }, 500);
  });
  