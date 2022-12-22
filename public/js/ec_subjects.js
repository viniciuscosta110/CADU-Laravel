function makeSubjects() {
    const content = document.getElementById('content');
  
    const data = [{
        title: "Programação 1",
        href: "/details",
      }, {
        title: "Matemática Discreta",
        href: "/details",
      }, {
        title: "...",
        href: "/details",
      }
    ]
    
    const generatedHtml = data.reduce((acc, item) => {
      return acc + `
      <a class="text-center text-white" href="${item.href}">${item.title}</a>
    `}, '');
  
    content.innerHTML = generatedHtml;  
  }
  
  makeSubjects()