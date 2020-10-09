const react = document.getElementById('react');
const php = document.getElementById('php');
const js = document.getElementById('js');
const languages = [react, php, js];

const toReactBtn = document.getElementById('to-react');
const toPhpBtn = document.getElementById('to-php');
const toJsBtn = document.getElementById('to-js');
const filters = [toReactBtn, toPhpBtn, toJsBtn];

filters.forEach((filter) => {
  filter.addEventListener('click', () => {
    const windowWidth = window.innerWidth;
    if (windowWidth > 540) {
      react.style.display = filter === toReactBtn ? 'grid' : 'none';
      php.style.display = filter === toPhpBtn ? 'grid' : 'none';
      js.style.display = filter === toJsBtn ? 'grid' : 'none';
    } else {
      react.style.display = filter === toReactBtn ? 'block' : 'none';
      php.style.display = filter === toPhpBtn ? 'block' : 'none';
      js.style.display = filter === toJsBtn ? 'block' : 'none';
    }

    filter.classList.add('active');
    filters
      .filter((el) => el !== filter)
      .forEach((otherFilter) => otherFilter.classList.remove('active'));
  });
});

window.addEventListener('resize', () => {
  const windowWidth = window.innerWidth;
  languages.forEach((language) => {
    if (language.style.display !== 'none') {
      language.style.display = windowWidth > 540 ? 'grid' : 'block';
    }
  });
});
