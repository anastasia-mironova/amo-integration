import fs from "fs";
import getLead from "./getLead.js";
import qs from "querystring";
import { checkCampaign, checkSource } from "../fieldHandle.js";
import dc from "../dataController.js"
export default  function updateWebhookHandler(req, res) {
  if (req.method == "POST") {
    var body = "";
    let leadId;
  //  let updateLog = []
    let rawdata = fs.readFileSync("./logs/update.json")
     let updateLog =[...JSON.parse(rawdata)];
   
    req.on("data", function (data) {
       // console.log("update")
      body += data;
     // console.log("body ",body)
      if (body.length > 1e6) req.connection.destroy();
    });

    req.on("end", function () {
      var post = qs.parse(body);
      //console.log(post)
    //   let customValues = JSON.stringify(post);
    //   console.log(customValues)
      leadId = post["leads[update][0][id]"];
      if (leadId) {
       console.log("lead id", leadId)
       if(updateLog.includes(leadId)){
           console.log("exist")
           return
       }else{
          
        const customValue =   getLead(leadId, true).then(res=>{
            console.log("custom  web",res)
            if(res[1].custom_fields_values){
               
              
                res[1].custom_fields_values.forEach((el ) => {
                    if(el.field_id == 307487){
                        updateLog.push(leadId.toString())
                        fs.writeFileSync("./logs/update.json",JSON.stringify(updateLog))
                        
                        const source = checkSource(res[0]);
                        const campaign=checkCampaign(res[0]);
                        source.forEach((element)=>{
                            
                           dc.UpdateValue(element, 'IncomeSourceAmo', res[1].price)
                           dc.UpdateValue(element, 'SalesSourceAmo', 1)
                        })
                        console.log(source)
                        console.log("camp",campaign)
                        dc.UpdateValue(campaign, "SalesCampaignAmo", 1)
                        dc.UpdateValue(campaign, 'IncomeCampaignAmo', res[1].price)
                    }
               })
            }
           
            
          console.log(res[1].price)
             
          });
       }
         
        
      
       // 
      }
    });
  }

  res.sendStatus(200);
}
