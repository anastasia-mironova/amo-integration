import fs from "fs";
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
  }
}
