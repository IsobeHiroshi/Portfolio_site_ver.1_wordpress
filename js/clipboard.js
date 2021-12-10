const mailIcon = document.getElementById('mailIcon');

mailIcon.addEventListener('click', ()=> {
  return navigator.clipboard.writeText('isobe69b2@gmail.com').then(function() {
    alert('Email Address Copied to Clipboard!')
  }).catch(function(error) {
    alert((error && error.message) || 'Email Address Copy Failed.')
  })
})