// 		<button class="popup-bg_form-content_form-submit" type="submit">Отправить</button>
async function submitForm(e) {
  e.preventDefault()
  const name = document.getElementById('popUpName').value
  const phoneNumber = document.getElementById('popUpTel').value
  const msg = document.getElementById('popUpMessage').value

  const dataForm = {
    name,
    phoneNumber,
    msg
  }

  const req = await fetch('./wp-content/themes/legalcenter/src/phpScripts/saveMSgForDB.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json;charset=utf-8'
    },
    body: JSON.stringify({
      action: 'handle_form_submission',
      data: dataForm
    })
  
  });
  const res = await req.json()
  console.log(res)
}

document.querySelector('.popup-bg_form-content_form-submit').addEventListener('click', (e)=> submitForm(e))