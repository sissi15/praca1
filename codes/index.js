
// const articles = [
//     {
//         id: 1,
//         title: "Lorem ipsum 1",
//         author: "Jan Nowak",
//         text: "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque amet, vitae consequatur exercitationem ratione voluptatibus repudiandae alias deleniti culpa illo suscipit quia sint temporibus illum commodi itaque ea ab ipsum?"
//     },
//     {
//         id: 2,
//         title: "Lorem ipsum 2 ?",
//         author: "Ania Kwiatkowska",
//         text: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi cumque accusantium sapiente perspiciatis id ipsam necessitatibus recusandae unde dolores error sunt officiis ad, voluptatum veniam, blanditiis nam in totam esse."
//     },
//     {
//         id: 3,
//         title: "Lorem ipsum 3",
//         author: "Jan Kowalski",
//         text: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi cumque accusantium sapiente perspiciatis id ipsam necessitatibus recusandae unde dolores error sunt officiis ad, voluptatum veniam, blanditiis nam in totam esse."
//     }
// ]

// var students = [{
//     name: "Mike",
//     track: "track-a",
//     achievements: 23,
//     points: 400,
//   },
//   {
//     name: "james",
//     track: "track-a",
//     achievements: 2,
//     points: 21,
//   },
// ]

// var i, item;

// for (i = 0; i < articles.length; i++) {
//   for (item in articles[i]) {
//     document.getElementById("demo").innerHTML = articles[i].title + ", " + articles[i].text;
//     // document.write( articles[i][item] + "<br>");
//   }
// }

// students.forEach(myFunction);

// function myFunction(item, index) {
//   for (var key in item) {
//     document.getElementById("demo").innerHTML = item[key];
//     // console.log(item[key])
//   }
// }


// var text = '[{ "name":"John", "age":"39", "city":"New York"}, { "name":"John", "age":"39", "city":"Inne"}]';
// var obj = JSON.parse(text, function (key, value) {
   
//     console.log('2',value);
//     return value;

// });
// document.getElementById("demo").innerHTML = obj.name + ", " + obj.city;



// const showArticle = () => {
//     articles.forEach((i) => { //i jako index
//         // if(item.toLowerCase()===e.target.value.toLowerCase()){
//             document.querySelector('div').textContent =articles[i]; //numer indexu
//         //    }
//        })
   
// }
 
// showArticle();

// const input = document.querySelector("input");
// const passwords=['jedEN', 'DwA'];
// const messages = ['super', 'działa'];

// const showMessage = (e) => {
//     passwords.forEach((item,i) => { //i jako index
//         if(item.toLowerCase()===e.target.value.toLowerCase()){
//             document.querySelector('div').textContent =messages[i]; //numer indexu
//         }
//     })
// }

// input.addEventListener("input", showMessage)
