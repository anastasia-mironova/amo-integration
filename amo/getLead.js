import https from "https";
import fs from "fs";
const getLead = (leadId) => {
  let rawdata = fs.readFileSync("./utils/amo_token.json");
  const tokens = JSON.parse(rawdata);
  const options = {
    hostname: "marketingmcpr.amocrm.ru",
    port: 443,
    path: `/api/v4/leads/${leadId}`,
    method: "GET",
    headers: {
      "Content-Type": "application/json",
      Authorization: `Bearer ${tokens["access_token"]}`,
      "User-Agent": "amoCRM-oAuth-client/1.0",
    },
  };
  const req = https.request(options, (res) => {
    console.log(`statusCode: ${res.statusCode}`);

    res.on("data", (d) => {
     // process.stdout.write(d)
      if (res.statusCode == 200) {
        const customFields = JSON.parse(d)["custom_fields_values"];
       // console.log(customFields)
        const values = [];
        if(!customFields) return 
        customFields.forEach((value) => {
          if(value["values"][0]["value"]){
            values.push(value["values"][0]["value"]);
          }
          
        });
        console.log(values)
        return values;
      }
    });

    // })
  });

  req.on("error", (error) => {
    console.error(error);
  });
  // req.write(data)
  req.end();
};
export  default getLead


