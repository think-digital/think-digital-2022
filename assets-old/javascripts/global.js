// Object Fit
if ('objectFit' in document.documentElement.style === false) {
  const elements = document.querySelectorAll('.js-object-fit');
  elements.forEach((element) => {
    const imgURL = element.querySelector('img');
    const imgSrc = imgURL.getAttribute('src');
    if (imgURL) {
      element.style.backgroundImage = `url('${imgSrc}')`;
      element.classList.add('is-object-fit-fallback');
    }
  });
}

// Nav Popup
function navMenu() {
  const nav = document.querySelector('.js-nav');
  const navOpen = document.querySelector('.js-nav-open');
  const navClose = document.querySelector('.js-nav-close');
  navOpen.addEventListener('click', () => {
    nav.classList.remove('is-closed');
    nav.classList.add('is-open');
  });
  navClose.addEventListener('click', () => {
    nav.classList.remove('is-open');
    nav.classList.add('is-closed');
  });
}
const navExists = document.body.contains(document.querySelector('.js-nav'));
if (navExists) {
  navMenu();
}

// Accordian
function accordianMenu() {
  var accordian = document.querySelectorAll('.js-accordian');
  for (let i = 0; i < accordian.length; i++) {
    accordian[i].addEventListener('click', function() {
      this.classList.toggle('is-active');
      var panel = this.nextElementSibling;
      if (panel.style.maxHeight){
        panel.style.maxHeight = null;
      } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
      }
    });
  }
}
const accordianExists = document.body.contains(document.querySelector('.js-accordian'));
if (accordianExists) {
  accordianMenu();
}

// Team Preview
function teamMembers() {
  // Values
  const opens = document.querySelectorAll('.js-team-open');
  const closes = document.querySelectorAll('.js-team-close');
  const teams = document.querySelectorAll('.js-team');
  // Settings
  const avatar = document.querySelector('.js-team-avatar');
  const name = document.querySelector('.js-team-name');
  const role = document.querySelector('.js-team-role');
  const bio = document.querySelector('.js-team-bio');
  const link = document.querySelector('.js-team-link');
  const button = document.querySelector('.js-team-button');
  // Loops
  opens.forEach((open) => {
    open.addEventListener('click', () => {
      teams.forEach((team) => {
        team.classList.remove('is-closed');
        team.classList.add('is-open');
      });
      avatar.setAttribute('src', open.getAttribute('data-avatar'));
      avatar.setAttribute('alt', open.getAttribute('data-name'));
      name.innerHTML = open.getAttribute('data-name');
      role.innerHTML = open.getAttribute('data-role');
      bio.innerHTML = open.getAttribute('data-bio');
      if (open.getAttribute('data-link')) {
        bio.classList.remove('is-last');
        button.classList.remove('is-hidden');
        link.setAttribute('href', open.getAttribute('data-link'));
        link.setAttribute('title', 'Read more about' + open.getAttribute('data-first-name'));
        link.innerHTML = 'Read more about ' + open.getAttribute('data-first-name');
      } else {
        bio.classList.add('is-last');
        button.classList.add('is-hidden');
      }
    });
  })
  closes.forEach((close) => {
    close.addEventListener('click', () => {
      teams.forEach((team) => {
        team.classList.remove('is-open');
        team.classList.add('is-closed');
      });
    });
  });
}
const teamExists = document.body.contains(document.querySelector('.js-team'));
if (teamExists) {
  teamMembers();
}

