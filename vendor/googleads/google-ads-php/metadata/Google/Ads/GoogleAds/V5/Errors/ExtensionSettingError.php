<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/errors/extension_setting_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V5\Errors;

class ExtensionSettingError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a8f170a3c676f6f676c652f6164732f676f6f676c656164732f76352f6572726f72732f657874656e73696f6e5f73657474696e675f6572726f722e70726f746f121e676f6f676c652e6164732e676f6f676c656164732e76352e6572726f727322ae140a19457874656e73696f6e53657474696e674572726f72456e756d2290140a15457874656e73696f6e53657474696e674572726f72120f0a0b554e5350454349464945441000120b0a07554e4b4e4f574e100112170a13455854454e53494f4e535f5245515549524544100212250a21464545445f545950455f455854454e53494f4e5f545950455f4d49534d41544348100312150a11494e56414c49445f464545445f54595045100412340a30494e56414c49445f464545445f545950455f464f525f435553544f4d45525f455854454e53494f4e5f53455454494e47100512250a2143414e4e4f545f4348414e47455f464545445f4954454d5f4f4e5f435245415445100612290a2543414e4e4f545f5550444154455f4e45574c595f435245415445445f455854454e53494f4e100712330a2f4e4f5f4558495354494e475f41445f47524f55505f455854454e53494f4e5f53455454494e475f464f525f54595045100812330a2f4e4f5f4558495354494e475f43414d504149474e5f455854454e53494f4e5f53455454494e475f464f525f54595045100912330a2f4e4f5f4558495354494e475f435553544f4d45525f455854454e53494f4e5f53455454494e475f464f525f54595045100a122d0a2941445f47524f55505f455854454e53494f4e5f53455454494e475f414c52454144595f455849535453100b122d0a2943414d504149474e5f455854454e53494f4e5f53455454494e475f414c52454144595f455849535453100c122d0a29435553544f4d45525f455854454e53494f4e5f53455454494e475f414c52454144595f455849535453100d12350a3141445f47524f55505f464545445f414c52454144595f4558495354535f464f525f504c414345484f4c4445525f54595045100e12350a3143414d504149474e5f464545445f414c52454144595f4558495354535f464f525f504c414345484f4c4445525f54595045100f12350a31435553544f4d45525f464545445f414c52454144595f4558495354535f464f525f504c414345484f4c4445525f54595045101012160a1256414c55455f4f55545f4f465f52414e4745101112240a2043414e4e4f545f5345545f4649454c445f574954485f46494e414c5f55524c53101212160a1246494e414c5f55524c535f4e4f545f534554101312180a14494e56414c49445f50484f4e455f4e554d4245521014122a0a2650484f4e455f4e554d4245525f4e4f545f535550504f525445445f464f525f434f554e5452591015122d0a29434152524945525f53504543494649435f53484f52545f4e554d4245525f4e4f545f414c4c4f574544101612230a1f5052454d49554d5f524154455f4e554d4245525f4e4f545f414c4c4f5745441017121a0a16444953414c4c4f5745445f4e554d4245525f54595045101812280a24494e56414c49445f444f4d45535449435f50484f4e455f4e554d4245525f464f524d4154101912230a1f56414e4954595f50484f4e455f4e554d4245525f4e4f545f414c4c4f574544101a12180a14494e56414c49445f434f554e5452595f434f4445101b12230a1f494e56414c49445f43414c4c5f434f4e56455253494f4e5f545950455f4944101c122e0a2a435553544f4d45525f4e4f545f494e5f414c4c4f574c4953545f464f525f43414c4c545241434b494e471045122a0a2643414c4c545241434b494e475f4e4f545f535550504f525445445f464f525f434f554e545259101e12120a0e494e56414c49445f4150505f4944101f12260a2251554f5445535f494e5f5245564945575f455854454e53494f4e5f534e4950504554102012270a2348595048454e535f494e5f5245564945575f455854454e53494f4e5f534e4950504554102112280a245245564945575f455854454e53494f4e5f534f555243455f4e4f545f454c494749424c45102212280a24534f555243455f4e414d455f494e5f5245564945575f455854454e53494f4e5f54455854102312110a0d4d495353494e475f4649454c441024121f0a1b494e434f4e53495354454e545f43555252454e43595f434f4445531025122a0a2650524943455f455854454e53494f4e5f4841535f4455504c4943415445445f48454144455253102612340a3050524943455f4954454d5f4841535f4455504c4943415445445f4845414445525f414e445f4445534352495054494f4e102712250a2150524943455f455854454e53494f4e5f4841535f544f4f5f4645575f4954454d53102812260a2250524943455f455854454e53494f4e5f4841535f544f4f5f4d414e595f4954454d53102912150a11554e535550504f525445445f56414c5545102a121d0a19494e56414c49445f4445564943455f505245464552454e4345102b12180a14494e56414c49445f5343484544554c455f454e44102d122a0a26444154455f54494d455f4d5553545f42455f494e5f4143434f554e545f54494d455f5a4f4e45102f12250a214f5645524c415050494e475f5343484544554c45535f4e4f545f414c4c4f574544103012200a1c5343484544554c455f454e445f4e4f545f41465445525f53544152541031121e0a1a544f4f5f4d414e595f5343484544554c45535f5045525f444159103212260a224455504c49434154455f455854454e53494f4e5f464545445f4954454d5f454449541033121b0a17494e56414c49445f534e4950504554535f4845414445521034123c0a3850484f4e455f4e554d4245525f4e4f545f535550504f525445445f574954485f43414c4c545241434b494e475f464f525f434f554e5452591035121f0a1b43414d504149474e5f544152474554494e475f4d49534d41544348103612220a1e43414e4e4f545f4f5045524154455f4f4e5f52454d4f5645445f464545441037121b0a17455854454e53494f4e5f545950455f52455155495245441038122d0a29494e434f4d50415449424c455f554e4445524c59494e475f4d41544348494e475f46554e4354494f4e1039121d0a1953544152545f444154455f41465445525f454e445f44415445103a12180a14494e56414c49445f50524943455f464f524d4154103b121a0a1650524f4d4f54494f4e5f494e56414c49445f54494d45103c123c0a3850524f4d4f54494f4e5f43414e4e4f545f5345545f50455243454e545f444953434f554e545f414e445f4d4f4e45595f444953434f554e54103d123e0a3a50524f4d4f54494f4e5f43414e4e4f545f5345545f50524f4d4f54494f4e5f434f44455f414e445f4f52444552535f4f5645525f414d4f554e54103e12250a21544f4f5f4d414e595f444543494d414c5f504c414345535f535045434946494544103f12190a15494e56414c49445f4c414e47554147455f434f4445104012180a14554e535550504f525445445f4c414e4755414745104112300a2c435553544f4d45525f434f4e53454e545f464f525f43414c4c5f5245434f5244494e475f5245515549524544104212260a22455854454e53494f4e5f53455454494e475f5550444154455f49535f415f4e4f4f50104312130a0f444953414c4c4f5745445f54455854104442f5010a22636f6d2e676f6f676c652e6164732e676f6f676c656164732e76352e6572726f7273421a457874656e73696f6e53657474696e674572726f7250726f746f50015a44676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c65617069732f6164732f676f6f676c656164732f76352f6572726f72733b6572726f7273a20203474141aa021e476f6f676c652e4164732e476f6f676c654164732e56352e4572726f7273ca021e476f6f676c655c4164735c476f6f676c654164735c56355c4572726f7273ea0222476f6f676c653a3a4164733a3a476f6f676c654164733a3a56353a3a4572726f7273620670726f746f33"
        ), true);
        static::$is_initialized = true;
    }
}

