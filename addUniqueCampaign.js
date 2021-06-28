import fs from "fs";
import dc from "./dataController.js"
export default function addUniqueCampaign(value) {
  if (!value) return;
  let campaigns = [];
  try {
    let rawdata = fs.readFileSync("./campaigns.json");
    campaigns = JSON.parse(rawdata);
  } catch {}

  if (!campaigns.includes(value)) {
    campaigns.push(value);
    fs.writeFileSync("./campaigns.json", JSON.stringify(campaigns));
    dc.addColumn(value, "SalesCampaignAmo")
    dc.addColumn(value, "LeadsCampaignAmo")
    dc.addColumn(value, "IncomeCampaignAmo")
    dc.addColumn(value, "ClicksCampaign")
    dc.addColumn(value, "CostsCampaign")
    dc.addColumn(value, "ImpressionsCampaign")
  }
}
