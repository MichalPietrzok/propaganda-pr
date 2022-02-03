const addSubscriber = (targetForm) => {
  const button = document.querySelector('[data-popup="sign"]')
  const thanks = document.querySelector('[data-popup="thanks"]')
  const mainWrapper = document.querySelector('.page-popup')
  const request = new XMLHttpRequest();
  request.open('POST', ajaxurl, true);
  request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
  request.send(`${new URLSearchParams(new FormData(targetForm)).toString()}&action=add_subscriber`);
  button.disabled = true;
  request.onreadystatechange = function () {
    if (request.readyState === XMLHttpRequest.DONE && request.status === 200) {
      setTimeout(() => {
        mainWrapper.style.display = 'none';
        thanks.style.display = 'block';
        thanks.style.opacity = 1;
        targetForm.reset()
      }, 500)
    }
  }
  return false;
}

export default addSubscriber
