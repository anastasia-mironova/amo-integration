import { readFileSync } from "fs";
import fs from "fs";

const countSource = (
  data = ["le", "v", "email", "4", "yanfdddex", "nmb", "klj", "jhj"]
) => {
  if (typeof data == "undefined") return null;
  let res1 = undefined,
    res2 = undefined;
  let fields = JSON.parse(readFileSync("source.json", "utf-8"));
  for (let obj in fields) {
    if (!fields[obj]["field"]) {
      continue;
    } else {
      res1 = data.some((el) => {
        console.log(fields[obj]["field"][0]);
        return el.includes(fields[obj]["field"][0]);
      });
      if (fields[obj]["field"][1] && res1) {
        res2 = data.some((el) => {
          return el.includes(fields[obj]["field"][1]);
        });
      } else {
        res2 = undefined;
      }
      if (res1 && res2) {
        fields[obj]["count"] += 1;
        break;
      } else if (res1 && typeof res2 == "undefined") {
        fields[obj]["count"] += 1;
        break;
      } else console.log("         ");

      fields[obj]["field"];
      console.log("res1", res1);
      console.log("res2", res2);
    }
  }

  if (!res1 && typeof res2 == "undefined") {
    fields["unrecognized"]["count"] += 1;
  }
  console.log(fields);
  let sourceColumns = [];
  for (let el in fields) {
    if (fields[el]["count"] > 0) {
      sourceColumns.push(fields[el]["column"]);
    }
  }
  return sourceColumns;
};

const checkCampaign = (data = ['vk_str', 'jjjjjj', "jjjjjjjjbbn"])=>{
  let campaigns = []
    try {
      let campaignName;
        let rawdata = fs.readFileSync('./campaigns.json');
        campaigns = JSON.parse(rawdata);
      data.forEach(field=>{
       
        campaigns.forEach(camp =>{
          //console.log(camp)
          if(field.includes(camp)){
            console.log(camp)
           campaignName =  camp;
           
           
          }
        })
      })
      return campaignName
    } catch (e){
      console.log(e) 
    }
    
  
 return ""
}
console.log("campaign   ",checkCampaign())

