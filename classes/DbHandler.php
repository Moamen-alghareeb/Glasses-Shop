<?php

interface DbHandler {
    public function connect():bool;
    public function get_data($per_page, $page);
    public function disconnect();   
    public function get_record_by_id($id);
    
    
}

"resCode": "0", 
  "resMsg": "success", 
  "result": {
    "all": {
      "data": [
        {
          "FreeUnitItemDetail": [
            {
              "CurrentAmount": "2147483648", 
              "EffectiveTime": "20260210000000", 
              "ExpireTime": "20260210060000", 
              "FreeUnitInstanceID": "127000000100018580", 
              "FreeUnitOrigin": {
                "OfferingKey": {
                  "OfferingID": "30011", 
                  "PurchaseSeq": "127000000006571"
                }, 
                "OriginType": "1"
              }, 
              "InitialAmount": "2147483648", 
              "RollOverFlag": "N"
            }, 
            {
              "CurrentAmount": "3221225472", 
              "EffectiveTime": "20260210000000", 
              "ExpireTime": "20260210060000", 
              "FreeUnitInstanceID": "127000000100018578", 
              "FreeUnitOrigin": {
                "OfferingKey": {
                  "OfferingID": "30012", 
                  "PurchaseSeq": "127000000006567"
                }, 
                "OriginType": "1"
              }, 
              "InitialAmount": "3221225472", 
              "RollOverFlag": "N"
            }, 
            {
              "CurrentAmount": "3221225472", 
              "EffectiveTime": "20260210000000", 
              "ExpireTime": "20260210060000", 
              "FreeUnitInstanceID": "127000000100018577", 
              "FreeUnitOrigin": {
                "OfferingKey": {
                  "OfferingID": "30012", 
                  "PurchaseSeq": "127000000006566"
                }, 
                "OriginType": "1"
              }, 
              "InitialAmount": "3221225472", 
              "RollOverFlag": "N"
            }, 
            {
              "CurrentAmount": "3221225472", 
              "EffectiveTime": "20260210000000", 
              "ExpireTime": "20260210060000", 
              "FreeUnitInstanceID": "127000000100018576", 
              "FreeUnitOrigin": {
                "OfferingKey": {
                  "OfferingID": "30012", 
                  "PurchaseSeq": "127000000006561"
                }, 
                "OriginType": "1"
              }, 
              "InitialAmount": "3221225472", 
              "RollOverFlag": "N"
            }
          ], 
          "FreeUnitType": "C_7036", 
          "FreeUnitTypeName": "compteurs bonus nuit", 
          "MeasureUnit": "1106", 
          "MeasureUnitName": "Bytes", 
          "TotalInitialAmount": "11811160064", 
          "TotalUnusedAmount": "11811160064"
        }, 
        {
          "FreeUnitItemDetail": {
            "CurrentAmount": "1610612736", 
            "EffectiveTime": "20260209092051", 
            "ExpireTime": "20260216092051", 
            "FreeUnitInstanceID": "127000000100018579", 
            "InitialAmount": "1610612736", 
            "RollOverFlag": "N"
          }, 
          "FreeUnitType": "C_7039", 
          "FreeUnitTypeName": "compteur data 7 jours", 
          "MeasureUnit": "1106", 
          "MeasureUnitName": "Bytes", 
          "TotalInitialAmount": "1610612736", 
          "TotalUnusedAmount": "1610612736"
        }, 
        {
          "FreeUnitItemDetail": {
            "CurrentAmount": "2147483648", 
            "EffectiveTime": "20260123162607", 
            "ExpireTime": "20260311092051", 
            "FreeUnitInstanceID": "127000000100018300", 
            "InitialAmount": "2147483648", 
            "RollOverFlag": "N"
          }, 
          "FreeUnitType": "C_7037", 
          "FreeUnitTypeName": "Compteur bonus mois", 
          "MeasureUnit": "1106", 
          "MeasureUnitName": "Bytes", 
          "TotalInitialAmount": "2147483648", 
          "TotalUnusedAmount": "2147483648"
        }, 
        {
          "FreeUnitItemDetail": {
            "CurrentAmount": "348966092800", 
            "EffectiveTime": "20260120102410", 
            "ExpireTime": "20260305090615", 
            "FreeUnitInstanceID": "127000000100018283", 
            "InitialAmount": "348966092800", 
            "RollOverFlag": "N"
          }, 
          "FreeUnitType": "C_7066", 
          "FreeUnitTypeName": "Compteur IllimiNet 30 jours", 
          "MeasureUnit": "1106", 
          "MeasureUnitName": "Bytes", 
          "TotalInitialAmount": "348966092800", 
          "TotalUnusedAmount": "348966092800"
        }, 
        {
          "FreeUnitItemDetail": {
            "CurrentAmount": "348966092800", 
            "EffectiveTime": "20260120102410", 
            "ExpireTime": "20260305090615", 
            "FreeUnitInstanceID": "127000000100018283", 
            "InitialAmount": "348966092800", 
            "RollOverFlag": "N"
          }, 
          "FreeUnitType": "C_7066", 
          "FreeUnitTypeName": "Compteur IllimiNet 30 jours", 
          "MeasureUnit": "1106", 
          "MeasureUnitName": "Bytes", 
          "TotalInitialAmount": "348966092800", 
          "TotalUnusedAmount": "348966092800"
        }, 
        {
          "FreeUnitItemDetail": {
            "CurrentAmount": "27917287424", 
            "EffectiveTime": "20260126093926", 
            "ExpireTime": "20260305090545", 
            "FreeUnitInstanceID": "127000000100018338", 
            "InitialAmount": "27917287424", 
            "RollOverFlag": "N"
          }, 
          "FreeUnitType": "C_7033", 
          "FreeUnitTypeName": "Compteur data MyMix 30 jours", 
          "MeasureUnit": "1106", 
          "MeasureUnitName": "Bytes", 
          "TotalInitialAmount": "27917287424", 
          "TotalUnusedAmount": "27917287424"
        }, 
        {
          "FreeUnitItemDetail": {
            "CurrentAmount": "1400", 
            "EffectiveTime": "20260126093926", 
            "ExpireTime": "20260305090545", 
            "FreeUnitInstanceID": "127000000100018337", 
            "InitialAmount": "1400", 
            "RollOverFlag": "N"
          }, 
          "FreeUnitType": "C_7021", 
          "FreeUnitTypeName": "Compteur MyMix SMS tous reseaux 30 Jour", 
          "MeasureUnit": "1101", 
          "MeasureUnitName": "Items", 
          "TotalInitialAmount": "1400", 
          "TotalUnusedAmount": "1400"
        }, 
        {
          "FreeUnitItemDetail": {
            "CurrentAmount": "84000", 
            "EffectiveTime": "20260126093926", 
            "ExpireTime": "20260305090545", 
            "FreeUnitInstanceID": "127000000100018336", 
            "InitialAmount": "84000", 
            "RollOverFlag": "N"
          }, 
          "FreeUnitType": "C_7006", 
          "FreeUnitTypeName": "compteur MyMix 30 jours", 
          "MeasureUnit": "1003", 
          "MeasureUnitName": "Seconds", 
          "TotalInitialAmount": "84000", 
          "TotalUnusedAmount": "84000"
        }, 
        {
          "FreeUnitItemDetail": {
            "CurrentAmount": "84000", 
            "EffectiveTime": "20260126093926", 
            "ExpireTime": "20260305090545", 
            "FreeUnitInstanceID": "127000000100018336", 
            "InitialAmount": "84000", 
            "RollOverFlag": "N"
          }, 
          "FreeUnitType": "C_7006", 
          "FreeUnitTypeName": "compteur MyMix 30 jours", 
          "MeasureUnit": "1003", 
          "MeasureUnitName": "Seconds", 
          "TotalInitialAmount": "84000", 
          "TotalUnusedAmount": "84000"
        }, 
        {
          "FreeUnitItemDetail": {
            "CurrentAmount": "3600", 
            "EffectiveTime": "20260126094102", 
            "ExpireTime": "20260305010135", 
            "FreeUnitInstanceID": "127000000100018362", 
            "InitialAmount": "3600", 
            "RollOverFlag": "N"
          }, 
          "FreeUnitType": "C_7027", 
          "FreeUnitTypeName": "compteur international Monde 30 jours", 
          "MeasureUnit": "1003", 
          "MeasureUnitName": "Seconds", 
          "TotalInitialAmount": "3600", 
          "TotalUnusedAmount": "3600"
        }, 
        {
          "FreeUnitItemDetail": {
            "CurrentAmount": "45", 
            "EffectiveTime": "20260120102701", 
            "ExpireTime": "20260305005655", 
            "FreeUnitInstanceID": "127000000100018289", 
            "InitialAmount": "45", 
            "RollOverFlag": "N"
          }, 
          "FreeUnitType": "C_7051", 
          "FreeUnitTypeName": "compteur SMS Roaming  Rest Afrique 30 jours", 
          "MeasureUnit": "1101", 
          "MeasureUnitName": "Items", 
          "TotalInitialAmount": "45", 
          "TotalUnusedAmount": "45"
        }, 
        {
          "FreeUnitItemDetail": {
            "CurrentAmount": "2700", 
            "EffectiveTime": "20260120102701", 
            "ExpireTime": "20260305005655", 
            "FreeUnitInstanceID": "127000000100018288", 
            "InitialAmount": "2700", 
            "RollOverFlag": "N"
          }, 
          "FreeUnitType": "C_7029", 
          "FreeUnitTypeName": "compteur voyage Rest Afrique 30 jours", 
          "MeasureUnit": "1003", 
          "MeasureUnitName": "Seconds", 
          "TotalInitialAmount": "2700", 
          "TotalUnusedAmount": "2700"
        }, 
        {
          "FreeUnitItemDetail": {
            "CurrentAmount": "32212254720", 
            "EffectiveTime": "20260126093631", 
            "ExpireTime": "20260305005537", 
            "FreeUnitInstanceID": "127000000100018331", 
            "InitialAmount": "32212254720", 
            "RollOverFlag": "N"
          }, 
          "FreeUnitType": "C_7040", 
          "FreeUnitTypeName": "compteur data 30 jours", 
          "MeasureUnit": "1106", 
          "MeasureUnitName": "Bytes", 
          "TotalInitialAmount": "32212254720", 
          "TotalUnusedAmount": "32212254720"
        }, 
        {
          "FreeUnitItemDetail": {
            "CurrentAmount": "720", 
            "EffectiveTime": "20260203005254", 
            "ExpireTime": "20260210005254", 
            "FreeUnitInstanceID": "127000000100018395", 
            "InitialAmount": "720", 
            "RollOverFlag": "N"
          }, 
          "FreeUnitType": "C_7026", 
          "FreeUnitTypeName": "compteur international Eur_Am 7 jours", 
          "MeasureUnit": "1003", 
          "MeasureUnitName": "Seconds", 
          "TotalInitialAmount": "720", 
          "TotalUnusedAmount": "720"
        }, 
        {
          "FreeUnitItemDetail": [
            {
              "CurrentAmount": "27500000000", 
              "EffectiveTime": "20260119101649", 
              "ExpireTime": "20260218005148", 
              "FreeUnitInstanceID": 0, 
              "FreeUnitOrigin": {
              }, 
              "InitialAmount": "27500000000", 
              "RollOverFlag": "N"
            }
          ], 
          "FreeUnitType": "C_6004", 
          "FreeUnitTypeName": "Compteur Top appel 15 jour", 
          "MeasureUnit": 1167, 
          "MeasureUnitName": "cfa", 
          "TotalInitialAmount": "27500000000", 
          "TotalUnusedAmount": "27500000000"
        }
      ], 
      "total": 0
    }, 
    "bonus": {
      "data": [
      ], 
      "internet": {
        "data": [
          {
            "FreeUnitItemDetail": [
              {
                "CurrentAmount": "2147483648", 
                "EffectiveTime": "20260210000000", 
                "ExpireTime": "20260210060000", 
                "FreeUnitInstanceID": "127000000100018580", 
                "FreeUnitOrigin": {
                  "OfferingKey": {
                    "OfferingID": "30011", 
                    "PurchaseSeq": "127000000006571"
                  }, 
                  "OriginType": "1"
                }, 
                "InitialAmount": "2147483648", 
                "RollOverFlag": "N"
              }, 
              {
                "CurrentAmount": "3221225472", 
                "EffectiveTime": "20260210000000", 
                "ExpireTime": "20260210060000", 
                "FreeUnitInstanceID": "127000000100018578", 
                "FreeUnitOrigin": {
                  "OfferingKey": {
                    "OfferingID": "30012", 
                    "PurchaseSeq": "127000000006567"
                  }, 
                  "OriginType": "1"
                }, 
                "InitialAmount": "3221225472", 
                "RollOverFlag": "N"
              }, 
              {
                "CurrentAmount": "3221225472", 
                "EffectiveTime": "20260210000000", 
                "ExpireTime": "20260210060000", 
                "FreeUnitInstanceID": "127000000100018577", 
                "FreeUnitOrigin": {
                  "OfferingKey": {
                    "OfferingID": "30012", 
                    "PurchaseSeq": "127000000006566"
                  }, 
                  "OriginType": "1"
                }, 
                "InitialAmount": "3221225472", 
                "RollOverFlag": "N"
              }, 
              {
                "CurrentAmount": "3221225472", 
                "EffectiveTime": "20260210000000", 
                "ExpireTime": "20260210060000", 
                "FreeUnitInstanceID": "127000000100018576", 
                "FreeUnitOrigin": {
                  "OfferingKey": {
                    "OfferingID": "30012", 
                    "PurchaseSeq": "127000000006561"
                  }, 
                  "OriginType": "1"
                }, 
                "InitialAmount": "3221225472", 
                "RollOverFlag": "N"
              }
            ], 
            "FreeUnitType": "C_7036", 
            "FreeUnitTypeName": "compteurs bonus nuit", 
            "MeasureUnit": "1106", 
            "MeasureUnitName": "Bytes", 
            "TotalInitialAmount": "11811160064", 
            "TotalUnusedAmount": "11811160064"
          }, 
          {
            "FreeUnitItemDetail": {
              "CurrentAmount": "2147483648", 
              "EffectiveTime": "20260123162607", 
              "ExpireTime": "20260311092051", 
              "FreeUnitInstanceID": "127000000100018300", 
              "InitialAmount": "2147483648", 
              "RollOverFlag": "N"
            }, 
            "FreeUnitType": "C_7037", 
            "FreeUnitTypeName": "Compteur bonus mois", 
            "MeasureUnit": "1106", 
            "MeasureUnitName": "Bytes", 
            "TotalInitialAmount": "2147483648", 
            "TotalUnusedAmount": "2147483648"
          }
        ], 
        "total": 13
      }, 
      "sms": {
        "data": [
        ], 
        "total": 0
      }, 
      "total": 0, 
      "voice": {
        "data": [
        ], 
        "total": 0
      }
    }, 
    "celtiisBusiness": {
      "data": [
      ], 
      "internet": {
        "data": [
        ], 
        "total": 0
      }, 
      "sms": {
        "data": [
        ], 
        "total": 0
      }, 
      "total": 0, 
      "voice": {
        "data": [
          {
            "FreeUnitItemDetail": {
              "CurrentAmount": "84000", 
              "EffectiveTime": "20260126093926", 
              "ExpireTime": "20260305090545", 
              "FreeUnitInstanceID": "127000000100018336", 
              "InitialAmount": "84000", 
              "RollOverFlag": "N"
            }, 
            "FreeUnitType": "C_7006", 
            "FreeUnitTypeName": "compteur MyMix 30 jours", 
            "MeasureUnit": "1003", 
            "MeasureUnitName": "Seconds", 
            "TotalInitialAmount": "84000", 
            "TotalUnusedAmount": "84000"
          }
        ], 
        "total": 1400
      }
    }, 
    "chrono": {
      "data": [
      ], 
      "internet": {
        "data": [
        ], 
        "total": 0
      }, 
      "sms": {
        "data": [
        ], 
        "total": 0
      }, 
      "total": 0, 
      "voice": {
        "data": [
        ], 
        "total": 0
      }
    }, 
    "convertiis": {
      "data": [
      ], 
      "internet": {
        "data": [
        ], 
        "total": 0
      }, 
      "sms": {
        "data": [
        ], 
        "total": 0
      }, 
      "total": 0, 
      "voice": {
        "data": [
        ], 
        "total": 0
      }
    }, 
    "creditAmount": "13500000000", 
    "flybox": {
      "data": [
      ], 
      "internet": {
        "data": [
        ], 
        "total": 0
      }, 
      "sms": {
        "data": [
        ], 
        "total": 0
      }, 
      "total": 0, 
      "voice": {
        "data": [
        ], 
        "total": 0
      }
    }, 
    "gbandjo": {
      "data": [
      ], 
      "internet": {
        "data": [
        ], 
        "total": 0
      }, 
      "sms": {
        "data": [
        ], 
        "total": 0
      }, 
      "total": 0, 
      "voice": {
        "data": [
        ], 
        "total": 0
      }
    }, 
    "illiminet": {
      "data": [
      ], 
      "internet": {
        "data": [
          {
            "FreeUnitItemDetail": {
              "CurrentAmount": "348966092800", 
              "EffectiveTime": "20260120102410", 
              "ExpireTime": "20260305090615", 
              "FreeUnitInstanceID": "127000000100018283", 
              "InitialAmount": "348966092800", 
              "RollOverFlag": "N"
            }, 
            "FreeUnitType": "C_7066", 
            "FreeUnitTypeName": "Compteur IllimiNet 30 jours", 
            "MeasureUnit": "1106", 
            "MeasureUnitName": "Bytes", 
            "TotalInitialAmount": "348966092800", 
            "TotalUnusedAmount": "348966092800"
          }
        ], 
        "total": 325
      }, 
      "sms": {
        "data": [
        ], 
        "total": 0
      }, 
      "total": 0, 
      "voice": {
        "data": [
        ], 
        "total": 0
      }
    }, 
    "internationalHello": {
      "data": [
      ], 
      "internet": {
        "data": [
          {
            "FreeUnitItemDetail": {
              "CurrentAmount": "348966092800", 
              "EffectiveTime": "20260120102410", 
              "ExpireTime": "20260305090615", 
              "FreeUnitInstanceID": "127000000100018283", 
              "InitialAmount": "348966092800", 
              "RollOverFlag": "N"
            }, 
            "FreeUnitType": "C_7066", 
            "FreeUnitTypeName": "Compteur IllimiNet 30 jours", 
            "MeasureUnit": "1106", 
            "MeasureUnitName": "Bytes", 
            "TotalInitialAmount": "348966092800", 
            "TotalUnusedAmount": "348966092800"
          }
        ], 
        "total": 325
      }, 
      "sms": {
        "data": [
        ], 
        "total": 0
      }, 
      "total": 0, 
      "voice": {
        "data": [
          {
            "FreeUnitItemDetail": {
              "CurrentAmount": "3600", 
              "EffectiveTime": "20260126094102", 
              "ExpireTime": "20260305010135", 
              "FreeUnitInstanceID": "127000000100018362", 
              "InitialAmount": "3600", 
              "RollOverFlag": "N"
            }, 
            "FreeUnitType": "C_7027", 
            "FreeUnitTypeName": "compteur international Monde 30 jours", 
            "MeasureUnit": "1003", 
            "MeasureUnitName": "Seconds", 
            "TotalInitialAmount": "3600", 
            "TotalUnusedAmount": "3600"
          }, 
          {
            "FreeUnitItemDetail": {
              "CurrentAmount": "720", 
              "EffectiveTime": "20260203005254", 
              "ExpireTime": "20260210005254", 
              "FreeUnitInstanceID": "127000000100018395", 
              "InitialAmount": "720", 
              "RollOverFlag": "N"
            }, 
            "FreeUnitType": "C_7026", 
            "FreeUnitTypeName": "compteur international Eur_Am 7 jours", 
            "MeasureUnit": "1003", 
            "MeasureUnitName": "Seconds", 
            "TotalInitialAmount": "720", 
            "TotalUnusedAmount": "720"
          }
        ], 
        "total": 72
      }
    }, 
    "internetConnect": {
      "data": [
      ], 
      "internet": {
        "data": [
          {
            "FreeUnitItemDetail": {
              "CurrentAmount": "1610612736", 
              "EffectiveTime": "20260209092051", 
              "ExpireTime": "20260216092051", 
              "FreeUnitInstanceID": "127000000100018579", 
              "InitialAmount": "1610612736", 
              "RollOverFlag": "N"
            }, 
            "FreeUnitType": "C_7039", 
            "FreeUnitTypeName": "compteur data 7 jours", 
            "MeasureUnit": "1106", 
            "MeasureUnitName": "Bytes", 
            "TotalInitialAmount": "1610612736", 
            "TotalUnusedAmount": "1610612736"
          }, 
          {
            "FreeUnitItemDetail": {
              "CurrentAmount": "32212254720", 
              "EffectiveTime": "20260126093631", 
              "ExpireTime": "20260305005537", 
              "FreeUnitInstanceID": "127000000100018331", 
              "InitialAmount": "32212254720", 
              "RollOverFlag": "N"
            }, 
            "FreeUnitType": "C_7040", 
            "FreeUnitTypeName": "compteur data 30 jours", 
            "MeasureUnit": "1106", 
            "MeasureUnitName": "Bytes", 
            "TotalInitialAmount": "32212254720", 
            "TotalUnusedAmount": "32212254720"
          }
        ], 
        "total": 31.5
      }, 
      "sms": {
        "data": [
        ], 
        "total": 0
      }, 
      "total": 720.5, 
      "voice": {
        "data": [
        ], 
        "total": 0
      }
    }, 
    "loyalty": {
      "data": [
      ], 
      "internet": {
        "data": [
        ], 
        "total": 0
      }, 
      "sms": {
        "data": [
        ], 
        "total": 0
      }, 
      "total": 0, 
      "voice": {
        "data": [
        ], 
        "total": 0
      }
    }, 
    "mymix": {
      "data": [
      ], 
      "internet": {
        "data": [
          {
            "FreeUnitItemDetail": {
              "CurrentAmount": "27917287424", 
              "EffectiveTime": "20260126093926", 
              "ExpireTime": "20260305090545", 
              "FreeUnitInstanceID": "127000000100018338", 
              "InitialAmount": "27917287424", 
              "RollOverFlag": "N"
            }, 
            "FreeUnitType": "C_7033", 
            "FreeUnitTypeName": "Compteur data MyMix 30 jours", 
            "MeasureUnit": "1106", 
            "MeasureUnitName": "Bytes", 
            "TotalInitialAmount": "27917287424", 
            "TotalUnusedAmount": "27917287424"
          }
        ], 
        "total": 26
      }, 
      "sms": {
        "data": [
          {
            "FreeUnitItemDetail": {
              "CurrentAmount": "1400", 
              "EffectiveTime": "20260126093926", 
              "ExpireTime": "20260305090545", 
              "FreeUnitInstanceID": "127000000100018337", 
              "InitialAmount": "1400", 
              "RollOverFlag": "N"
            }, 
            "FreeUnitType": "C_7021", 
            "FreeUnitTypeName": "Compteur MyMix SMS tous reseaux 30 Jour", 
            "MeasureUnit": "1101", 
            "MeasureUnitName": "Items", 
            "TotalInitialAmount": "1400", 
            "TotalUnusedAmount": "1400"
          }
        ], 
        "total": 1400
      }, 
      "total": 0, 
      "voice": {
        "data": [
          {
            "FreeUnitItemDetail": {
              "CurrentAmount": "84000", 
              "EffectiveTime": "20260126093926", 
              "ExpireTime": "20260305090545", 
              "FreeUnitInstanceID": "127000000100018336", 
              "InitialAmount": "84000", 
              "RollOverFlag": "N"
            }, 
            "FreeUnitType": "C_7006", 
            "FreeUnitTypeName": "compteur MyMix 30 jours", 
            "MeasureUnit": "1003", 
            "MeasureUnitName": "Seconds", 
            "TotalInitialAmount": "84000", 
            "TotalUnusedAmount": "84000"
          }
        ], 
        "total": 1400
      }
    }, 
    "passRoaming": {
      "data": [
      ], 
      "internet": {
        "data": [
        ], 
        "total": 0
      }, 
      "sms": {
        "data": [
          {
            "FreeUnitItemDetail": {
              "CurrentAmount": "45", 
              "EffectiveTime": "20260120102701", 
              "ExpireTime": "20260305005655", 
              "FreeUnitInstanceID": "127000000100018289", 
              "InitialAmount": "45", 
              "RollOverFlag": "N"
            }, 
            "FreeUnitType": "C_7051", 
            "FreeUnitTypeName": "compteur SMS Roaming  Rest Afrique 30 jours", 
            "MeasureUnit": "1101", 
            "MeasureUnitName": "Items", 
            "TotalInitialAmount": "45", 
            "TotalUnusedAmount": "45"
          }
        ], 
        "total": 45
      }, 
      "total": 0, 
      "voice": {
        "data": [
          {
            "FreeUnitItemDetail": {
              "CurrentAmount": "2700", 
              "EffectiveTime": "20260120102701", 
              "ExpireTime": "20260305005655", 
              "FreeUnitInstanceID": "127000000100018288", 
              "InitialAmount": "2700", 
              "RollOverFlag": "N"
            }, 
            "FreeUnitType": "C_7029", 
            "FreeUnitTypeName": "compteur voyage Rest Afrique 30 jours", 
            "MeasureUnit": "1003", 
            "MeasureUnitName": "Seconds", 
            "TotalInitialAmount": "2700", 
            "TotalUnusedAmount": "2700"
          }
        ], 
        "total": 45
      }
    }, 
    "promo": {
      "data": [
      ], 
      "internet": {
        "data": [
        ], 
        "total": 0
      }, 
      "sms": {
        "data": [
        ], 
        "total": 0
      }, 
      "total": 0, 
      "voice": {
        "data": [
        ], 
        "total": 0
      }
    }, 
    "topAppel": {
      "data": [
      ], 
      "internet": {
        "data": [
        ], 
        "total": 0
      }, 
      "sms": {
        "data": [
        ], 
        "total": 0
      }, 
      "total": 0, 
      "voice": {
        "data": [
        ], 
        "total": 0
      }
    }
  }