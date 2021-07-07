import https from "https";
import fs from "fs";
async function doRequest(leadId,typeRequest) {
  //console.log("test", typeRequest)
  return await new Promise((resolve, reject) => {
    let rawdata = fs.readFileSync("./utils/amo_token.json");
    const tokens = JSON.parse(rawdata);
    let valuesForCheck =[];
    let customValObject;
  
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

      res
        .on("data", (d) => {
         // process.stdout.write(d)
          if (res.statusCode == 200) {
            
              //console.log("updtkjnvrksfvn")
              customValObject = JSON.parse(JSON.stringify(JSON.parse(d)));
             // console.log("new custom", values); 
             
            // const customFields = JSON.parse(d)["custom_fields_values"];
            const customFields = JSON.parse(d)["custom_fields_values"];
            // console.log(customFields)
            if (!customFields) return;
            customFields.forEach((value) => {
              if (value["values"][0]["value"]) {
                valuesForCheck.push(value["values"][0]["value"]);
              }
            });
        
             
          }
        })
        .on("end", () => {
          resolve([valuesForCheck, customValObject]);
        })
        .on("error", (error) => {
          console.error(error);
          reject(error);
        });

      // })
    });
    req.end();
  });
}
const getLead = async (leadId, typeRequest) => {
  return await doRequest(leadId,typeRequest);
};

export default getLead;
//getLead(13842419)
