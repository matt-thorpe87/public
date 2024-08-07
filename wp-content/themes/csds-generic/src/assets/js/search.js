document.addEventListener('DOMContentLoaded', function() {
  var toggleButton = document.querySelector('.qld__main-nav__toggle-search');
  var modal = document.querySelector('.qld__header__search');

  function handleButtonClick() {
    if (modal.style.display === 'block') {
      hideModal();
    } else {
      showModal();
    }
  }

  function showModal() {
    if (modal) {
      modal.style.display = 'block';
      toggleButton.classList.remove('qld__main-nav__toggle-search--open');
      toggleButton.classList.add('qld__main-nav__toggle-search--close');
      console.log('Modal opened');
    }
  }

  function hideModal() {
    if (modal) {
      modal.style.display = 'none';
      toggleButton.classList.remove('qld__main-nav__toggle-search--close');
      toggleButton.classList.add('qld__main-nav__toggle-search--open');
      console.log('Modal closed');
    }
  }

  function setupButtonListener() {
    if (window.matchMedia("(max-width: 991px)").matches) {
      if (toggleButton) {
        toggleButton.addEventListener('click', handleButtonClick);
      }
    } else {
      if (toggleButton) {
        toggleButton.removeEventListener('click', handleButtonClick);
      }
    }
  }

  setupButtonListener();
  window.addEventListener('resize', setupButtonListener);
});
