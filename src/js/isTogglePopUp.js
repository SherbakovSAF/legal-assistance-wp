const popUpBtnOpen = document.querySelector('.start-content_card--last div button');
const popUp = document.querySelector('.popup-bg')
const submitBtn = document.querySelector('.popup-bg_form-content_form-submit')

function popUpToggle() {
     popUp.classList.toggle('popup-bg--active')
}

popUpBtnOpen.addEventListener('click', () => {
     document.body.style.overflow = 'hidden'
     popUpToggle()
})

popUp.addEventListener('click', (e) => {
     if (e.target.classList.contains('popup-bg') || e.target.classList.contains('popup-bg_form-content_close-popup')) {
          document.body.style.overflow = 'auto';
          popUpToggle();
     }
     popUp.querySelector('button').addEventListener('click', b => b.preventDefault())
});