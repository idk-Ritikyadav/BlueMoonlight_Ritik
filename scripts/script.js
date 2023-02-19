
  const form = document.querySelector('form');
  const email = form.querySelector('#email');
  const username = form.querySelector('#username');
  const password = form.querySelector('#password');
  const message = form.querySelector('#message');
  const submitButton = form.querySelector('input[type="submit"]');

  function validateEmail(emailValue) {
    const emailRegex = /^\S+@\S+\.\S+$/;
    return emailRegex.test(emailValue);
  }

  function validateUsername(usernameValue) {
    const usernameRegex = /^[a-zA-Z0-9_\-]+$/;
    return usernameRegex.test(usernameValue);
  }

  function validatePassword(passwordValue) {
    return passwordValue.length >= 8 &&
      /[a-z]/.test(passwordValue) &&
      /[A-Z]/.test(passwordValue) &&
      /[0-9]/.test(passwordValue);
  }

  function validateForm() {
    let valid = true;

    if (!validateEmail(email.value.trim())) {
      valid = false;
      message.textContent = 'Invalid email format.';
    } else if (!validateUsername(username.value.trim())) {
      valid = false;
      message.textContent = 'Username can only contain letters, numbers, underscores, and dashes.';
    } else if (!validatePassword(password.value.trim())) {
      valid = false;
      message.textContent = 'Password must be at least 8 characters long and contain at least one lowercase letter, one uppercase letter, and one number.';
    } else {
      message.textContent = '';
    }

    submitButton.disabled = !valid;
  }

  email.addEventListener('input', validateForm);
  username.addEventListener('input', validateForm);
  password.addEventListener('input', validateForm);
