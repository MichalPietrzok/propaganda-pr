const addSubscriber = (targetForm) => {
  const thanks = document.querySelector('[data-popup="thanks"]')
  const mainWrapper = document.querySelector('.page-popup')
  const request = new XMLHttpRequest();
  request.open('POST', ajaxurl, true);
  request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
  request.send(`${new URLSearchParams(new FormData(targetForm)).toString()}&action=add_subscriber`);
  request.onreadystatechange = function () {
    if (request.readyState === XMLHttpRequest.DONE && request.status === 200) {
      setTimeout(() => {
        mainWrapper.style.display = 'none';
        thanks.style.display = 'block';
        targetForm.reset()
      }, 500)
    }
  }
  return false;
}

export default addSubscriber
