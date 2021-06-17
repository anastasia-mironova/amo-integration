const sequelize = require("./utils/db");
const { DataTypes } = require("sequelize");

const Lead = sequelize.define("lead", {
  date: {
    type: DataTypes.DATE,
    primaryKey: true,
  },
  month: {
    type: DataTypes.STRING,
  },
 "yandex/cpa": {
    type: DataTypes.INTEGER,
    defaultValue: 0
  },
  "yandex/organic": {
    type: DataTypes.INTEGER,
    defaultValue: 0
  },
  "google/cpa": {
    type: DataTypes.INTEGER,
    defaultValue: 0
  },
  "google/organic": {
    type: DataTypes.INTEGER,
    defaultValue: 0
  },
  "instagram/cpa": {
    type: DataTypes.INTEGER,
    defaultValue: 0
  },
  "instagram/social": {
    type: DataTypes.INTEGER,
    defaultValue: 0
  },
  "facebook/social": {
    type: DataTypes.INTEGER,
    defaultValue: 0
  },
  "facebook/cpa": {
    type: DataTypes.INTEGER,
    defaultValue: 0
  },
  "odnoklassniki/cpa": {
    type: DataTypes.INTEGER,
    defaultValue: 0
  },
  "odnoklassniki/social": {
    type: DataTypes.INTEGER,
    defaultValue: 0
  },
  "vkontakte/cpa": {
    type: DataTypes.INTEGER,
    defaultValue: 0
  },
  "vkontakte/social": {
    type: DataTypes.INTEGER,
    defaultValue: 0
  }, "email": {
    type: DataTypes.INTEGER,
    defaultValue: 0
  }, "doublegis": {
    type: DataTypes.INTEGER,
    defaultValue: 0
  }, "direct": {
    type: DataTypes.INTEGER,
    defaultValue: 0
  }, "Google my business + Google maps": {
    type: DataTypes.INTEGER,
    defaultValue: 0
  },
  "andex directory + Yandex maps": {
    type: DataTypes.INTEGER,
    defaultValue: 0
  },
  "unrecognized": {
    type: DataTypes.INTEGER,
    defaultValue: 0
  }
});
const Income = sequelize.define("income", {
    date: {
      type: DataTypes.DATE,
      primaryKey: true,
    },
    month: {
      type: DataTypes.STRING,
    },
   "yandex/cpa": {
      type: DataTypes.INTEGER,
      defaultValue: 0
    },
    "yandex/organic": {
      type: DataTypes.INTEGER,
      defaultValue: 0
    },
    "google/cpa": {
      type: DataTypes.INTEGER,
      defaultValue: 0
    },
    "google/organic": {
      type: DataTypes.INTEGER,
      defaultValue: 0
    },
    "instagram/cpa": {
      type: DataTypes.INTEGER,
      defaultValue: 0
    },
    "instagram/social": {
      type: DataTypes.INTEGER,
      defaultValue: 0
    },
    "facebook/social": {
      type: DataTypes.INTEGER,
      defaultValue: 0
    },
    "facebook/cpa": {
      type: DataTypes.INTEGER,
      defaultValue: 0
    },
    "odnoklassniki/cpa": {
      type: DataTypes.INTEGER,
      defaultValue: 0
    },
    "odnoklassniki/social": {
      type: DataTypes.INTEGER,
      defaultValue: 0
    },
    "vkontakte/cpa": {
      type: DataTypes.INTEGER,
      defaultValue: 0
    },
    "vkontakte/social": {
      type: DataTypes.INTEGER,
      defaultValue: 0
    }, "email": {
      type: DataTypes.INTEGER,
      defaultValue: 0
    }, "doublegis": {
      type: DataTypes.INTEGER,
      defaultValue: 0
    }, "direct": {
      type: DataTypes.INTEGER,
      defaultValue: 0
    }, "Google my business + Google maps": {
      type: DataTypes.INTEGER,
      defaultValue: 0
    },
    "andex directory + Yandex maps": {
      type: DataTypes.INTEGER,
      defaultValue: 0
    },
    "unrecognized": {
      type: DataTypes.INTEGER,
      defaultValue: 0
    }
  });

  const Sale = sequelize.define("sale", {
    date: {
      type: DataTypes.DATE,
      primaryKey: true,
    },
    month: {
      type: DataTypes.STRING,
    },
   "yandex/cpa": {
      type: DataTypes.INTEGER,
      defaultValue: 0
    },
    "yandex/organic": {
      type: DataTypes.INTEGER,
      defaultValue: 0
    },
    "google/cpa": {
      type: DataTypes.INTEGER,
      defaultValue: 0
    },
    "google/organic": {
      type: DataTypes.INTEGER,
      defaultValue: 0
    },
    "instagram/cpa": {
      type: DataTypes.INTEGER,
      defaultValue: 0
    },
    "instagram/social": {
      type: DataTypes.INTEGER,
      defaultValue: 0
    },
    "facebook/social": {
      type: DataTypes.INTEGER,
      defaultValue: 0
    },
    "facebook/cpa": {
      type: DataTypes.INTEGER,
      defaultValue: 0
    },
    "odnoklassniki/cpa": {
      type: DataTypes.INTEGER,
      defaultValue: 0
    },
    "odnoklassniki/social": {
      type: DataTypes.INTEGER,
      defaultValue: 0
    },
    "vkontakte/cpa": {
      type: DataTypes.INTEGER,
      defaultValue: 0
    },
    "vkontakte/social": {
      type: DataTypes.INTEGER,
      defaultValue: 0
    }, "email": {
      type: DataTypes.INTEGER,
      defaultValue: 0
    }, "doublegis": {
      type: DataTypes.INTEGER,
      defaultValue: 0
    }, "direct": {
      type: DataTypes.INTEGER,
      defaultValue: 0
    }, "Google my business + Google maps": {
      type: DataTypes.INTEGER,
      defaultValue: 0
    },
    "andex directory + Yandex maps": {
      type: DataTypes.INTEGER,
      defaultValue: 0
    },
    "unrecognized": {
      type: DataTypes.INTEGER,
      defaultValue: 0
    }
  });

module.exports = {
 Lead,
 Income,
 Sale
};
