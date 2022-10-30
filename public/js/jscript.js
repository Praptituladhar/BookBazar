// for search
$(function*(){
alert("done");
});
// for search button
const toggleBtn = document.querySelector('#toggleBtn');
const divcross = document.querySelector('.divcross');
const crossBtn = document.querySelector('#cross');

toggleBtn.addEventListener('click', () => {
  divcross.style.display = 'block';

    // if(divcross.style.display === 'none') {
    //   divcross.style.display = 'block';
    //   toggleBtn.innerHTML = 'hide';
    // }
    // else{
    //   divcross.style.display = 'none';
    //   toggleBtn.innerHTML = 'show';

    // }
});
crossBtn.addEventListener('click', () => {
  divcross.style.display = 'none';
});