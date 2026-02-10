<?php

interface DbHandler {
    public function connect():bool;
    public function get_data($per_page, $page);
    public function disconnect();   
    public function get_record_by_id($id);
    
    
}

{
  "resCode": "0", 
  "resMsg": "success", 
  "result": {
    "all": {
      "data": [
        {
          "FreeUnitItemDetail": [
            {
              "CurrentAmount": "3221225472", 
              "EffectiveTime": "20260211000000", 
              "ExpireTime": "20260211060000", 
              "FreeUnitInstanceID": "127000000100018631", 
              "FreeUnitOrigin": {
                "OfferingKey": {
                  "OfferingID": "30012", 
                  "PurchaseSeq": "127000000006575"
                }, 
                "OriginType": "1"
              }, 
              "InitialAmount": "3221225472", 
              "RollOverFlag": "N"
            }, 
            {
              "CurrentAmount": "2147483648", 
              "EffectiveTime": "20260211000000", 
              "ExpireTime": "20260211060000", 
              "FreeUnitInstanceID": "127000000100018630", 
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
              "EffectiveTime": "20260211000000", 
              "ExpireTime": "20260211060000", 
              "FreeUnitInstanceID": "127000000100018629", 
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
              "EffectiveTime": "20260211000000", 
              "ExpireTime": "20260211060000", 
              "FreeUnitInstanceID": "127000000100018628", 
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
              "EffectiveTime": "20260211000000", 
              "ExpireTime": "20260211060000", 
              "FreeUnitInstanceID": "127000000100018627", 
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
          "TotalInitialAmount": "15032385536", 
          "TotalUnusedAmount": "15032385536"
        }, 
        {
          "FreeUnitItemDetail": {
            "CurrentAmount": "42949672960", 
            "EffectiveTime": "20260126093631", 
            "ExpireTime": "20260311135842", 
            "FreeUnitInstanceID": "127000000100018331", 
            "InitialAmount": "42949672960", 
            "RollOverFlag": "N"
          }, 
          "FreeUnitType": "C_7040", 
          "FreeUnitTypeName": "compteur data 30 jours", 
          "MeasureUnit": "1106", 
          "MeasureUnitName": "Bytes", 
          "TotalInitialAmount": "42949672960", 
          "TotalUnusedAmount": "42949672960"
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
          "FreeUnitItemDetail": [
            {
              "CurrentAmount": "8000000000", 
              "EffectiveTime": "20260203005925", 
              "ExpireTime": "20260216135948", 
              "FreeUnitInstanceID": 0, 
              "FreeUnitOrigin": {
              }, 
              "InitialAmount": "8000000000", 
              "RollOverFlag": "N"
            }
          ], 
          "FreeUnitType": "C_6002", 
          "FreeUnitTypeName": "Compteur Top appel 7 jour", 
          "MeasureUnit": 1167, 
          "MeasureUnitName": "cfa", 
          "TotalInitialAmount": "8000000000", 
          "TotalUnusedAmount": "8000000000"
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
        }, 
        {
          "FreeUnitItemDetail": [
            {
              "CurrentAmount": "125000000000", 
              "EffectiveTime": "20260126093840", 
              "ExpireTime": "20260305010108", 
              "FreeUnitInstanceID": 0, 
              "FreeUnitOrigin": {
              }, 
              "InitialAmount": "125000000000", 
              "RollOverFlag": "N"
            }
          ], 
          "FreeUnitType": "C_6003", 
          "FreeUnitTypeName": "Compteur Top appel 30 jour", 
          "MeasureUnit": 1167, 
          "MeasureUnitName": "cfa", 
          "TotalInitialAmount": "125000000000", 
          "TotalUnusedAmount": "125000000000"
        }
      ], 
      "total": 0
    }, 
    "bonus": {
      "internet": {
        "data": [
          {
            "FreeUnitItemDetail": [
              {
                "CurrentAmount": "3221225472", 
                "EffectiveTime": "20260211000000", 
                "ExpireTime": "20260211060000", 
                "FreeUnitInstanceID": "127000000100018631", 
                "FreeUnitOrigin": {
                  "OfferingKey": {
                    "OfferingID": "30012", 
                    "PurchaseSeq": "127000000006575"
                  }, 
                  "OriginType": "1"
                }, 
                "InitialAmount": "3221225472", 
                "RollOverFlag": "N"
              }, 
              {
                "CurrentAmount": "2147483648", 
                "EffectiveTime": "20260211000000", 
                "ExpireTime": "20260211060000", 
                "FreeUnitInstanceID": "127000000100018630", 
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
                "EffectiveTime": "20260211000000", 
                "ExpireTime": "20260211060000", 
                "FreeUnitInstanceID": "127000000100018629", 
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
                "EffectiveTime": "20260211000000", 
                "ExpireTime": "20260211060000", 
                "FreeUnitInstanceID": "127000000100018628", 
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
                "EffectiveTime": "20260211000000", 
                "ExpireTime": "20260211060000", 
                "FreeUnitInstanceID": "127000000100018627", 
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
            "TotalInitialAmount": "15032385536", 
            "TotalUnusedAmount": "15032385536"
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
        "total": 16
      }, 
      "sms": {
        "data": [
        ], 
        "total": 0
      }, 
      "voice": {
        "data": [
        ], 
        "total": 0
      }
    }, 
    "chrono": {
      "data": [
      ], 
      "total": 0
    }, 
    "connect": {
      "data": [
        {
          "FreeUnitItemDetail": {
            "CurrentAmount": "42949672960", 
            "EffectiveTime": "20260126093631", 
            "ExpireTime": "20260311135842", 
            "FreeUnitInstanceID": "127000000100018331", 
            "InitialAmount": "42949672960", 
            "RollOverFlag": "N"
          }, 
          "FreeUnitType": "C_7040", 
          "FreeUnitTypeName": "compteur data 30 jours", 
          "MeasureUnit": "1106", 
          "MeasureUnitName": "Bytes", 
          "TotalInitialAmount": "42949672960", 
          "TotalUnusedAmount": "42949672960"
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
        }
      ], 
      "total": 408.5
    }, 
    "convertiis": {
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
      "voice": {
        "data": [
        ], 
        "total": 0
      }
    }, 
    "creditAmount": "13500000000", 
    "flyBox": {
      "data": [
      ], 
      "total": 0
    }, 
    "internationalHello": {
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
          }
        ], 
        "total": 60
      }
    }, 
    "lllimiNet": {
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
    "loyalty": {
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
      "voice": {
        "data": [
        ], 
        "total": 0
      }
    }, 
    "myMix": {
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
      "voice": {
        "data": [
        ], 
        "total": 0
      }
    }, 
    "topAppel": {
      "data": [
        {
          "FreeUnitItemDetail": [
            {
              "CurrentAmount": "8000000000", 
              "EffectiveTime": "20260203005925", 
              "ExpireTime": "20260216135948", 
              "FreeUnitInstanceID": 0, 
              "FreeUnitOrigin": {
              }, 
              "InitialAmount": "8000000000", 
              "RollOverFlag": "N"
            }
          ], 
          "FreeUnitType": "C_6002", 
          "FreeUnitTypeName": "Compteur Top appel 7 jour", 
          "MeasureUnit": 1167, 
          "MeasureUnitName": "cfa", 
          "TotalInitialAmount": "8000000000", 
          "TotalUnusedAmount": "8000000000"
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
        }, 
        {
          "FreeUnitItemDetail": [
            {
              "CurrentAmount": "125000000000", 
              "EffectiveTime": "20260126093840", 
              "ExpireTime": "20260305010108", 
              "FreeUnitInstanceID": 0, 
              "FreeUnitOrigin": {
              }, 
              "InitialAmount": "125000000000", 
              "RollOverFlag": "N"
            }
          ], 
          "FreeUnitType": "C_6003", 
          "FreeUnitTypeName": "Compteur Top appel 30 jour", 
          "MeasureUnit": 1167, 
          "MeasureUnitName": "cfa", 
          "TotalInitialAmount": "125000000000", 
          "TotalUnusedAmount": "125000000000"
        }
      ], 
      "total": 160500000000
    }
  }
}