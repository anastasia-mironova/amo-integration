import pg from "pg";
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
    const query = `INSERT INTO "${table}" DEFAULT VALUES;`;
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
      await client
        .query(query)
        .then((res) => {
          return res["rows"][0][`${column}`];
        })
        .catch((e) => console.error(e.stack));
    } catch (error) {
      console.error(error.stack);
    } finally {
      await client.end();
      // closes connection
    }
  };
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
      await client
        .query(query)
        .then((res) => {
          return res["rows"][0][`${column}`];
        })
        .catch((e) => console.error(e.stack));
    } catch (error) {
      console.error(error.stack);
    } finally {
      await client.end();
      // closes connection
    }
  };
  UpdateValue = async (column, table, val) => {
    const client = new pg.Client(this.connData);
    const query = `INSERT INTO "${table}" DEFAULT VALUEs;
    UPDATE "${table}"
    SET ${column} = ${getValue(column, table) + val}
    WHERE "date" = current_date;`;
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
}

const dc = new DataController();

let kek = [
  "yandex/cpa",
  "yandex/organic",
  "google/cpa",
  "google/organic",
  "instagram/cpa",
  "instagram/social",
  "facebook/social",
  "facebook/cpa",
  "odnoklassniki/cpa",
  "odnoklassniki/social",
  "vkontakte/cpa",
  "vkontakte/social",
  "email",
  "doublegis",
  "direct",
  "Google my business + Google maps",
  "Yandex directory + Yandex maps",
];

kek.forEach(el=>{
  dc.AddColumn(el,"IncomeSourceAmo")
})

