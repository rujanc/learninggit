// let masyvas = ["yellow", "green", "red"];
//
// for(let i = 0; i < masyvas.length; i++){
//   console.log(masyvas[i]);
// }
//
// let masyvas2 = ["vienas", "du", "trys", "keturi"];
// let x = masyvas2.length
// for(let i = 0; i < x; i++){
//   console.log(masyvas2[i]);
// }
//
//   console.log(masyvas.toString());
//   console.log(masyvas.join("*"));
//   console.log(masyvas.join(" "));
//   console.log(masyvas.join("__"));
//
//   // console.log(masyvas.pop());
//   let x = masyvas.pop();
//   console.log(x);
//   console.log(masyvas);
//   masyvas.push(x);
//   console.log(masyvas);
//   masyvas.push("black");
//   console.log(masyvas);
//
//   let miestai = ["Vilnius", "Kaunas", "Klaipeda"];
//   miestai.push("Panevezys");
//   console.log(miestai);
//   let y = miestai.pop();
//   console.log(miestai);
//   console.log(y);
//
//   let persona = ["Jon Snow", "Cersei Lannister", "Daenerys Targaryen", "Theon Greyjoy", "Tyrion Lannister", "Arya Stark"];
//   // let z = persona.shift();
//   // console.log(z);
//   // let w = persona.pop();
//   // console.log(w);
//   let x = Number(prompt("Iveskite skaiciu nuo 1 iki 6"));
//   let result = x - 1;
//   console.log(persona[result]);
//
//   let str = "How, are, you, doing, today?";
//   let newArray = str.split(",");
//   console.log(newArray);
//
//     let text = "Vilkas - Erelis - Liūtas - Žirafa - Vėžlys - Panda - Delfinas";
//     let newtext = text.split("-");
//     newtext.splice(0, 0, "Liutas");
//     newtext.splice(3, 1);
//     console.log(newtext);
//
//     let masyvas = [
//       ["petras", "johnansas", "20"],
//       ["tomas", "smithas", "30"],
//     ];
//     // suma.toFixed(2)
//
//     let x = masyvas.length
//     for (i = 0; i < masyvas.length; i++){
//       let vardas = masyvas [i][0];
//       let pavarde = masyvas [i][1];
//       let age = masyvas [i][2];
//     console.log("as esu" + vardas + " " + pavarde);
//   }
//
    // let countries = [
    //   ["Amerika", "306000000", "9830000"],
    //   ["Anglija", "50762900", "130395"],
    //   ["Japonija", "126045211", "377873"],
    //   ["Australija", "24641662", "7686850"],
    //   ["Norvegija", "5330800", "385186"]
    //
    // ]
    //
    //
    // for (i = 0; i < countries.length; i++){
    //   let salis = countries [i][0];
    //   let gyventojai = countries [i][1] / 1000000;
    //   let plotas = countries [i][2];
    //   let vienam = plotas / (gyventojai * 1000000);
    //   console.log(salis + ", joje gyvena " + gyventojai + "mln gyventoju. Valstybes plotas: " + plotas + " , plotas tenkantis vienam gyventojui: " + vienam.toFixed(3))
    // }
//
//


    //
    // let masyvas = [];
    // let skaiciai = [];
    // for (i = 0; i < 7; i++){
    //   let x = prompt("Iveskite skaiciu, zodi ar kazka :D");
    //   if(isFinite(x) == true){
    //     skaiciai.push(x);
    //   } else{
    //     masyvas.push(x);
    //   }
    // }
    // console.log(masyvas);
    // console.log(skaiciai);


    // let array2 = ['Saulys', 'Oziaragis', 'Vezys'];
    // let array3 = ['Svarstykles', 'Mergele', 'Liutas'];
    // let avis = "Avinas";
    // let array = array2.concat(array3, "Jautis", avis);
    // console.log(array);
    //
    // let text = array.join(", ");
    // console.log(text);
    //
    // let atskirai = text.split(",");
    // console.log(atskirai);
    //
    // atskirai.sort();
    // console.log(atskirai);
    //
    // console.log(atskirai.indexOf('Saulys'));
    // console.log(atskirai.includes("Saulys"));

    // let vardas = "Jonukas";
    //
    // function showMessage(name){
    //   alert("Sveiki atvyke i funkciju pasauli!!!" + name);
    // }
    // // showMessage(vardas);
    // let x = 0;
    // function calcArea(length, width){
    //   return x = length * width;
    //
    // }
    // console.log(x);
    // calcArea(10,10);
    // console.log(x);
    //
    // function sayhello(human1, human2, human3){
    //  console.log("Sveiki atvyke " + human1);
    //  console.log("Sveiki atvyke " + human2);
    //  console.log("Sveiki atvyke " + human3);
    // }
    // sayhello("Vienas", "Du", "Trys");

    // function oddornot(x){
    //   return x % 2 === 0;
    // }

    // function isodd(y){
    //   return y % 2 !== 0;
    // }

    // function number(x){
    //   let y = 0;
    //   for(let i = 0; i < x; i++){
    //     y += i;
    //   }
    //   return y;
    // }
    // number(x);

    // function fact(x){
    //   let y = 1;
    //   for(let i = 1; i <= x; i++){
    //     y *= i;
    //   }
    //   return y;
    // }

    // numberFuc([3,2,1])

        // let x = 0
        // for(let i = 10; i >= x; i--){
        //   console.log(i);
        // }

//         let num = [12, 32, 34];
//         function reverse(x){
//         for(let i = x.length; i >= 0; i--){
//           console.log(x[i]);
//         }
//         // return;
//       }
// reverse(num);

      let numbers = [5, 6, 7, 8];
      function sum(x) = 0;
      let result = 0
      for (let i = 0; i < numbers.length; i++){
        result += numbers[i];
      }
