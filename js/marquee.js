// we can only run our javascript code once the page has loaded
window.onload = () => {
  // here we grab our marquee element
  const marquee = document.querySelector('.marquee')
  // only run the code if we find a marquee element
  if (marquee) {
    // here we create an empty array with 40 spaces
    const marquees = new Array(40).fill(null)
    // we go over our array and do a loop
    marquees.forEach(el => {
      // here it clones the element 40 times and adds 
      // each one to the content of the page
      marquee.parentNode.append(marquee.cloneNode(true));
    })
  }
}
