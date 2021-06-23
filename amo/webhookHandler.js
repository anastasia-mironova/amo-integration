import fs from "fs";
import getLead from "./getLead.js";
import qs from "querystring";
import { checkCampaign, checkSource } from "../fieldHandle.js";
export default function webhookHandler(req, res) {
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
        const customValue = getLead(leadId);
        console.log(customValue);
        console.log(checkSource(customValue));
        console.log(checkCampaign(customValue));
      }
    });
  }

  res.sendStatus(200);
}
