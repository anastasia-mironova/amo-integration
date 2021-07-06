export const convertDate = (date) => {
  let dateArr = date.split(".");
  const todaysDate = new Date();
  todaysDate.setFullYear(+dateArr[2], +dateArr[1][1] - 1, +dateArr[0]);
  let yyyy = todaysDate.getFullYear().toString();
  let mm = (todaysDate.getMonth() + 1).toString();
  let dd = todaysDate.getDate().toString();

  let mmChars = mm.split("");
  let ddChars = dd.split("");

  return (
    yyyy +
    "-" +
    (mmChars[1] ? mm : "0" + mmChars[0]) +
    "-" +
    (ddChars[1] ? dd : "0" + ddChars[0])
  );
};

export const getMonthName = (date) => {
  const monthNames = [
    "January",
    "February",
    "March",
    "April",
    "May",
    "June",
    "July",
    "August",
    "September",
    "October",
    "November",
    "December",
  ];

 
  let dateArr = date.split(".");
  return monthNames[+dateArr[1] - 1];
};

export const getObj = (obj) => {
  let newFieldContaiter = {};
  Object.assign(newFieldContaiter, obj);
  delete newFieldContaiter["Период"];
  delete newFieldContaiter["ДнНд"];
  delete newFieldContaiter["Дата создания"];
  delete newFieldContaiter["Итого"];
//  console.log(newFieldContaiter);
  return newFieldContaiter;
};
// export const getValues = (obj)=>{
//     let fieldArray = []
//     for(let key in obj){
//        fieldArray.push(obj[key])
//     }
//     return fieldArray.slice(3,fieldArray.length - 1 )
// }
