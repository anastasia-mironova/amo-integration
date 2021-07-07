import pg from "pg";
import { convertDate, getMonthName } from "./oldStatHelper.js";
class DataController {
  connData = {
    user: "postgres",
    database: "mcpr",
    password: "mcpr",
    port: 5432,
  };
  constructor() {}

  AddColumn = async (column, table) => {
    const client = new pg.Client(this.connData);
    const query = `ALTER TABLE "${table}"
                    ADD COLUMN IF NOT EXISTS  "${column}" INT;
                    ALTER TABLE "${table}"
                    alter COLUMN "${column}" SET DEFAULT 0;`;
    try {
      await client.connect(); // gets connection
      await client.query(query);
    } catch (error) {
      console.error(error.stack);
    } finally {
      await client.end();
      // closes connection
    }
  };

  AddRow = async (table) => {
    const client = new pg.Client(this.connData);
    const query = `INSERT INTO public."${table}" DEFAULT VALUES;`;
    try {
      await client.connect(); // gets connection
      await client.query(query);
    } catch (error) {
      console.error(error.stack);
    } finally {
      await client.end();
      // closes connection
    }
  };
  AddRowOldStat = async (table, obj, date) => {

    const pool = new pg.Pool(this.connData)
    const query = `INSERT INTO public."${table}" (date, month)  VALUES ('${convertDate(date)}', '${getMonthName(date)}');`;
   
  //   pool.query(query, (err, res) => {
  //     if (err) {
  //       throw err
  //     }
  //     console.log('res:', res)
  //     console.log(err, res)
  // pool.end()
  //   })

  const client = new pg.Client(this.connData);
   
    
    try {
      await client.connect(); // gets connection
      await client.query(query,  (err, res) => {
        if (err) throw err
        console.log(res)
        client.end()
      });
    } catch (error) {
    //  console.error(error.stack);
    } finally {
     // await client.end();
     
      // closes connection
     }
    // for(let key in obj){
    //   this.UpdateValueOldStat(key, table, obj[key], convertDate(date))
    // }
  };
  UpdateValueOldStat = async (column, table, val, date) => {
    const client = new pg.Client(this.connData);

    const query = `UPDATE "${table}"
    SET "${column}" = ${(await this.getValue(column, table)) + val}
    WHERE "date" =${date};`;

    try {
      await client.connect(); // gets connection
      await client.query(query);
    } catch (error) {
      console.log("test");
      console.error(error.stack);
    } finally {
      await client.end();
      // closes connection
    }
  };
  // getValue = async (column, table) => {
  //   const client = new pg.Client({
  //     user: "postgres",
  //     database: "mcpr",
  //     password: "mcpr",
  //     port: 5432,
  //   });
  //   const query = `select "${column}" from "${table}" where "date" = current_date`;
  //   try {
  //     await client.connect(); // gets connection
  //     await client
  //       .query(query)
  //       .then((res) => {
  //         return res["rows"][0][`${column}`];
  //       })
  //       .catch((e) => console.error(e.stack));
  //   } catch (error) {
  //     console.error(error.stack);
  //   } finally {
  //     await client.end();
  //     // closes connection
  //   }
  // };
  getValue = async (column, table) => {
    const client = new pg.Client({
      user: "postgres",
      database: "mcpr",
      password: "mcpr",
      port: 5432,
    });
    const query = `select "${column}" from "${table}" where "date" = current_date`;
    try {
      await client.connect(); // gets connection
      let val = await client
        .query(query)
        .then((res) => res["rows"][0][`${column}`])
        .catch((e) => console.error(e.stack));
      return val;
    } catch (error) {
      console.error(error.stack);
    } finally {
      await client.end();
      // closes connection
    }
  };
  UpdateValue = async (column, table, val) => {
    const client = new pg.Client(this.connData);

    const query = `UPDATE "${table}"
    SET "${column}" = ${(await this.getValue(column, table)) + val}
    WHERE "date" = current_date;`;

    try {
      await client.connect(); // gets connection
      await client.query(query);
    } catch (error) {
      console.log("test");
      console.error(error.stack);
      
    } finally {
      await client.end();
      // closes connection
    }
  };
}
const dc = new DataController();
export default dc;
//dc.AddRow('LeadsSourceAmo')
