import { readFileSync } from "fs";
import fs from "fs";
import isEmpty from "lodash";

export const checkSource = (data) => {
  let res1 = undefined,
    res2 = undefined;
  let fields = JSON.parse(readFileSync("./utils/source.json", "utf-8"));
  const filterReply = [];
  if (typeof data == "undefined") return ["Нераспознанный источник"];
  let isUnrecognized;
  fields.forEach((field, index) => {
    if (!field["field"]) {
    } else {
      res1 = data.findIndex((el, index) => {
        console.log(el.toString())

        return el.toString().includes(field["field"][0]);
      });

      if (res1 > -1) {
        data.splice(res1, 1);
        res1 = true;
      } else {
        res1 = undefined;
      }
      if (field["field"][1] && res1) {
        res2 = data.findIndex((el, index) => {
          return el.toString().includes(field["field"][1]);
        });

        if (res2 > -1) {
          data.splice(res2, 1);
          res2 = true;
        } else {
          res2 = undefined;
        }
      } else {
        res2 = undefined;
      }
      if (res1 && res2) {
        field["count"] += 1;
      } else if (res1 && typeof res2 == "undefined") {
        field["count"] += 1;
      }
    }
    filterReply.push(res1, res2);
  });
  isUnrecognized = filterReply.filter((el) => {
    return el;
  });

  if (isUnrecognized.length === 0) {
    fields[fields.length - 1]["unrecognized"]["count"] += 1;
  }
  let sourceColumns = [];
  fields.forEach((field) => {
    if (field["count"] > 0) {
      sourceColumns.push(field["column"]);
    }
  });
  if (fields[fields.length - 1]["unrecognized"]["count"] > 0) {
    sourceColumns.push(fields[fields.length - 1]["unrecognized"]["column"]);
  }
  console.log(fields)
  return sourceColumns;
};

export const checkCampaign = (data) => {
  let campaigns = [];
  if (!isEmpty(data)) return "Нераспознанный источник";
  try {
    let campaignName;
    let rawdata = fs.readFileSync("./utils/campaigns.json");
    campaigns = JSON.parse(rawdata);
    data.forEach((field) => {
      campaigns.forEach((camp) => {
        if (field.toString().includes(camp.toString())) {
          campaignName = camp;
        }
      });
    });
    return campaignName;
  } catch (e) {
    console.log(e);
  }

  return "Нераспознанный источник";
};
