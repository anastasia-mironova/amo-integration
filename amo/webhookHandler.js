import fs from "fs";
import getLead from "./getLead.js";
import qs from "querystring";
import { checkCampaign, checkSource } from "../fieldHandle.js";
import dc from "../dataController.js"
export default  function webhookHandler(req, res) {
  if (req.method == "POST") {
    var body = "";
    let leadId;
    req.on("data", function (data) {
      body += data;
      if (body.length > 1e6) req.connection.destroy();
    });

    req.on("end", function () {
      var post = qs.parse(body);
      leadId = post["leads[add][0][id]"];
      if (leadId) {
        console.log("lead id", leadId)
        const customValue =   getLead(leadId).then(res=>{
          console.log(res)
           const source = checkSource(res);
           const campaign=checkCampaign(res);
           source.forEach((element)=>{
              dc.UpdateValue(element, 'LeadsSourceAmo', 1)
           })
           dc.UpdateValue(campaign, "LeadsCampaignAmo", 1)
        });
        
      
       // 
      }
    });
  }

  res.sendStatus(200);
}
