<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/services/customer_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V5\Services;

class CustomerService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ab5030a2f676f6f676c652f6164732f676f6f676c656164732f76352f656e756d732f6163636573735f726f6c652e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76352e656e756d7322740a0e416363657373526f6c65456e756d22620a0a416363657373526f6c65120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e100112090a0541444d494e1002120c0a085354414e444152441003120d0a09524541445f4f4e4c591004120e0a0a454d41494c5f4f4e4c59100542e4010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76352e656e756d73420f416363657373526f6c6550726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76352f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56352e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56355c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56353a3a456e756d73620670726f746f330ae4050a5a676f6f676c652f6164732f676f6f676c656164732f76352f656e756d732f637573746f6d65725f7061795f7065725f636f6e76657273696f6e5f656c69676962696c6974795f6661696c7572655f726561736f6e2e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76352e656e756d7322d1020a34437573746f6d6572506179506572436f6e76657273696f6e456c69676962696c6974794661696c757265526561736f6e456e756d2298020a30437573746f6d6572506179506572436f6e76657273696f6e456c69676962696c6974794661696c757265526561736f6e120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e1001121a0a164e4f545f454e4f5547485f434f4e56455253494f4e531002121b0a17434f4e56455253494f4e5f4c41475f544f4f5f48494748100312230a1f4841535f43414d504149474e5f574954485f5348415245445f425544474554100412200a1c4841535f55504c4f41445f434c49434b535f434f4e56455253494f4e100512200a1c415645524147455f4441494c595f5350454e445f544f4f5f48494748100612190a15414e414c595349535f4e4f545f434f4d504c455445100712090a054f544845521008428a020a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76352e656e756d734235437573746f6d6572506179506572436f6e76657273696f6e456c69676962696c6974794661696c757265526561736f6e50726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76352f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56352e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56355c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56353a3a456e756d73620670726f746f330ac3030a39676f6f676c652f6164732f676f6f676c656164732f76352f656e756d732f726573706f6e73655f636f6e74656e745f747970652e70726f746f121d676f6f676c652e6164732e676f6f676c656164732e76352e656e756d73226f0a17526573706f6e7365436f6e74656e7454797065456e756d22540a13526573706f6e7365436f6e74656e7454797065120f0a0b554e535045434946494544100012160a125245534f555243455f4e414d455f4f4e4c59100112140a104d555441424c455f5245534f55524345100242ed010a21636f6d2e676f6f676c652e6164732e676f6f676c656164732e76352e656e756d734218526573706f6e7365436f6e74656e745479706550726f746f50015a42676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76352f656e756d733b656e756d73a20203474141aa021d476f6f676c652e4164732e476f6f676c654164732e56352e456e756d73ca021d476f6f676c655c4164735c476f6f676c654164735c56355c456e756d73ea0221476f6f676c653a3a4164733a3a476f6f676c654164733a3a56353a3a456e756d73620670726f746f330a8d110a30676f6f676c652f6164732f676f6f676c656164732f76352f7265736f75726365732f637573746f6d65722e70726f746f1221676f6f676c652e6164732e676f6f676c656164732e76352e7265736f75726365731a1f676f6f676c652f6170692f6669656c645f6265686176696f722e70726f746f1a19676f6f676c652f6170692f7265736f757263652e70726f746f1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f2298090a08437573746f6d657212400a0d7265736f757263655f6e616d651801200128094229e04105fa41230a21676f6f676c656164732e676f6f676c65617069732e636f6d2f437573746f6d657212140a0269641813200128034203e041034800880101121d0a1064657363726970746976655f6e616d651814200128094801880101121f0a0d63757272656e63795f636f64651815200128094203e041054802880101121b0a0974696d655f7a6f6e651816200128094203e04105480388010112220a15747261636b696e675f75726c5f74656d706c6174651817200128094804880101121d0a1066696e616c5f75726c5f737566666978181820012809480588010112210a146175746f5f74616767696e675f656e61626c6564181920012808480688010112240a126861735f706172746e6572735f6261646765181a200128084203e04103480788010112190a076d616e61676572181b200128084203e041034808880101121e0a0c746573745f6163636f756e74181c200128084203e04103480988010112570a1663616c6c5f7265706f7274696e675f73657474696e67180a2001280b32372e676f6f676c652e6164732e676f6f676c656164732e76352e7265736f75726365732e43616c6c5265706f7274696e6753657474696e6712660a1b636f6e76657273696f6e5f747261636b696e675f73657474696e67180e2001280b323c2e676f6f676c652e6164732e676f6f676c656164732e76352e7265736f75726365732e436f6e76657273696f6e547261636b696e6753657474696e674203e0410312570a1372656d61726b6574696e675f73657474696e67180f2001280b32352e676f6f676c652e6164732e676f6f676c656164732e76352e7265736f75726365732e52656d61726b6574696e6753657474696e674203e0410312c2010a2e7061795f7065725f636f6e76657273696f6e5f656c69676962696c6974795f6661696c7572655f726561736f6e7318102003280e3284012e676f6f676c652e6164732e676f6f676c656164732e76352e656e756d732e437573746f6d6572506179506572436f6e76657273696f6e456c69676962696c6974794661696c757265526561736f6e456e756d2e437573746f6d6572506179506572436f6e76657273696f6e456c69676962696c6974794661696c757265526561736f6e4203e0410312240a126f7074696d697a6174696f6e5f73636f7265181d200128014203e04103480a8801013a3cea41390a21676f6f676c656164732e676f6f676c65617069732e636f6d2f437573746f6d65721214637573746f6d6572732f7b637573746f6d65727d42050a035f696442130a115f64657363726970746976655f6e616d6542100a0e5f63757272656e63795f636f6465420c0a0a5f74696d655f7a6f6e6542180a165f747261636b696e675f75726c5f74656d706c61746542130a115f66696e616c5f75726c5f73756666697842170a155f6175746f5f74616767696e675f656e61626c656442150a135f6861735f706172746e6572735f6261646765420a0a085f6d616e61676572420f0a0d5f746573745f6163636f756e7442150a135f6f7074696d697a6174696f6e5f73636f7265229c020a1443616c6c5265706f7274696e6753657474696e6712230a1663616c6c5f7265706f7274696e675f656e61626c6564180a200128084800880101122e0a2163616c6c5f636f6e76657273696f6e5f7265706f7274696e675f656e61626c6564180b20012808480188010112530a1663616c6c5f636f6e76657273696f6e5f616374696f6e180c20012809422efa412b0a29676f6f676c656164732e676f6f676c65617069732e636f6d2f436f6e76657273696f6e416374696f6e480288010142190a175f63616c6c5f7265706f7274696e675f656e61626c656442240a225f63616c6c5f636f6e76657273696f6e5f7265706f7274696e675f656e61626c656442190a175f63616c6c5f636f6e76657273696f6e5f616374696f6e22c1010a19436f6e76657273696f6e547261636b696e6753657474696e6712280a16636f6e76657273696f6e5f747261636b696e675f69641803200128034203e04103480088010112360a2463726f73735f6163636f756e745f636f6e76657273696f6e5f747261636b696e675f69641804200128034203e04103480188010142190a175f636f6e76657273696f6e5f747261636b696e675f696442270a255f63726f73735f6163636f756e745f636f6e76657273696f6e5f747261636b696e675f696422590a1252656d61726b6574696e6753657474696e6712280a16676f6f676c655f676c6f62616c5f736974655f7461671802200128094203e04103480088010142190a175f676f6f676c655f676c6f62616c5f736974655f74616742fa010a25636f6d2e676f6f676c652e6164732e676f6f676c656164732e76352e7265736f7572636573420d437573746f6d657250726f746f50015a4a676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76352f7265736f75726365733b7265736f7572636573a20203474141aa0221476f6f676c652e4164732e476f6f676c654164732e56352e5265736f7572636573ca0221476f6f676c655c4164735c476f6f676c654164735c56355c5265736f7572636573ea0225476f6f676c653a3a4164733a3a476f6f676c654164733a3a56353a3a5265736f7572636573620670726f746f330ab2140a37676f6f676c652f6164732f676f6f676c656164732f76352f73657276696365732f637573746f6d65725f736572766963652e70726f746f1220676f6f676c652e6164732e676f6f676c656164732e76352e73657276696365731a39676f6f676c652f6164732f676f6f676c656164732f76352f656e756d732f726573706f6e73655f636f6e74656e745f747970652e70726f746f1a30676f6f676c652f6164732f676f6f676c656164732f76352f7265736f75726365732f637573746f6d65722e70726f746f1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f1a17676f6f676c652f6170692f636c69656e742e70726f746f1a1f676f6f676c652f6170692f6669656c645f6265686176696f722e70726f746f1a19676f6f676c652f6170692f7265736f757263652e70726f746f1a20676f6f676c652f70726f746f6275662f6669656c645f6d61736b2e70726f746f22560a12476574437573746f6d65725265717565737412400a0d7265736f757263655f6e616d651801200128094229e04102fa41230a21676f6f676c656164732e676f6f676c65617069732e636f6d2f437573746f6d65722280020a154d7574617465437573746f6d65725265717565737412180a0b637573746f6d65725f69641801200128094203e04102124b0a096f7065726174696f6e18042001280b32332e676f6f676c652e6164732e676f6f676c656164732e76352e73657276696365732e437573746f6d65724f7065726174696f6e4203e0410212150a0d76616c69646174655f6f6e6c7918052001280812690a15726573706f6e73655f636f6e74656e745f7479706518062001280e324a2e676f6f676c652e6164732e676f6f676c656164732e76352e656e756d732e526573706f6e7365436f6e74656e7454797065456e756d2e526573706f6e7365436f6e74656e745479706522ff010a1b437265617465437573746f6d6572436c69656e745265717565737412180a0b637573746f6d65725f69641801200128094203e0410212490a0f637573746f6d65725f636c69656e7418022001280b322b2e676f6f676c652e6164732e676f6f676c656164732e76352e7265736f75726365732e437573746f6d65724203e04102121a0a0d656d61696c5f616464726573731805200128094800880101124d0a0b6163636573735f726f6c6518042001280e32382e676f6f676c652e6164732e676f6f676c656164732e76352e656e756d732e416363657373526f6c65456e756d2e416363657373526f6c6542100a0e5f656d61696c5f616464726573732281010a11437573746f6d65724f7065726174696f6e123b0a0675706461746518012001280b322b2e676f6f676c652e6164732e676f6f676c656164732e76352e7265736f75726365732e437573746f6d6572122f0a0b7570646174655f6d61736b18022001280b321a2e676f6f676c652e70726f746f6275662e4669656c644d61736b224e0a1c437265617465437573746f6d6572436c69656e74526573706f6e736512150a0d7265736f757263655f6e616d6518022001280912170a0f696e7669746174696f6e5f6c696e6b18032001280922600a164d7574617465437573746f6d6572526573706f6e736512460a06726573756c7418022001280b32362e676f6f676c652e6164732e676f6f676c656164732e76352e73657276696365732e4d7574617465437573746f6d6572526573756c74226c0a144d7574617465437573746f6d6572526573756c7412150a0d7265736f757263655f6e616d65180120012809123d0a08637573746f6d657218022001280b322b2e676f6f676c652e6164732e676f6f676c656164732e76352e7265736f75726365732e437573746f6d657222200a1e4c69737441636365737369626c65437573746f6d6572735265717565737422390a1f4c69737441636365737369626c65437573746f6d657273526573706f6e736512160a0e7265736f757263655f6e616d657318012003280932ee060a0f437573746f6d65725365727669636512a9010a0b476574437573746f6d657212342e676f6f676c652e6164732e676f6f676c656164732e76352e73657276696365732e476574437573746f6d6572526571756573741a2b2e676f6f676c652e6164732e676f6f676c656164732e76352e7265736f75726365732e437573746f6d6572223782d3e4930221121f2f76352f7b7265736f757263655f6e616d653d637573746f6d6572732f2a7dda410d7265736f757263655f6e616d6512cc010a0e4d7574617465437573746f6d657212372e676f6f676c652e6164732e676f6f676c656164732e76352e73657276696365732e4d7574617465437573746f6d6572526571756573741a382e676f6f676c652e6164732e676f6f676c656164732e76352e73657276696365732e4d7574617465437573746f6d6572526573706f6e7365224782d3e493022922242f76352f637573746f6d6572732f7b637573746f6d65725f69643d2a7d3a6d75746174653a012ada4115637573746f6d65725f69642c6f7065726174696f6e12cd010a174c69737441636365737369626c65437573746f6d65727312402e676f6f676c652e6164732e676f6f676c656164732e76352e73657276696365732e4c69737441636365737369626c65437573746f6d657273526571756573741a412e676f6f676c652e6164732e676f6f676c656164732e76352e73657276696365732e4c69737441636365737369626c65437573746f6d657273526573706f6e7365222d82d3e493022712252f76352f637573746f6d6572733a6c69737441636365737369626c65437573746f6d65727312f2010a14437265617465437573746f6d6572436c69656e74123d2e676f6f676c652e6164732e676f6f676c656164732e76352e73657276696365732e437265617465437573746f6d6572436c69656e74526571756573741a3e2e676f6f676c652e6164732e676f6f676c656164732e76352e73657276696365732e437265617465437573746f6d6572436c69656e74526573706f6e7365225b82d3e493023722322f76352f637573746f6d6572732f7b637573746f6d65725f69643d2a7d3a637265617465437573746f6d6572436c69656e743a012ada411b637573746f6d65725f69642c637573746f6d65725f636c69656e741a1bca4118676f6f676c656164732e676f6f676c65617069732e636f6d42fb010a24636f6d2e676f6f676c652e6164732e676f6f676c656164732e76352e73657276696365734214437573746f6d65725365727669636550726f746f50015a48676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76352f73657276696365733b7365727669636573a20203474141aa0220476f6f676c652e4164732e476f6f676c654164732e56352e5365727669636573ca0220476f6f676c655c4164735c476f6f676c654164735c56355c5365727669636573ea0224476f6f676c653a3a4164733a3a476f6f676c654164733a3a56353a3a5365727669636573620670726f746f33"
        ), true);
        static::$is_initialized = true;
    }
}

