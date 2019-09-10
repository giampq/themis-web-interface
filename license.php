<?php
    //? |-----------------------------------------------------------------------------------------------|
    //? |  license.php                                                                                  |
    //? |                                                                                               |
    //? |  Copyright (c) 2018-2019 Belikhun. All right reserved                                         |
    //? |  Licensed under the MIT License. See LICENSE in the project root for license information.     |
    //? |-----------------------------------------------------------------------------------------------|

    require_once $_SERVER["DOCUMENT_ROOT"] ."/data/info.php";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>License | <?php print APPNAME ." v". VERSION; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" media="screen" href="/assets/css/default.css?v=<?php print VERSION; ?>" />
    <link rel="stylesheet" type="text/css" media="screen" href="/assets/css/scrollbar.css?v=<?php print VERSION; ?>" />
    <link rel="stylesheet" type="text/css" media="screen" href="/assets/fonts/material-font.css?v=<?php print VERSION; ?>" />
    <link rel="stylesheet" type="text/css" media="screen" href="/assets/fonts/fontawesome.css?v=<?php print VERSION; ?>" />
    <link rel="stylesheet" type="text/css" media="screen" href="/assets/fonts/calibri.css?v=<?php print VERSION; ?>" />
    <link rel="stylesheet" type="text/css" media="screen" href="/assets/css/button.css?v=<?php print VERSION; ?>" />
    <link rel="stylesheet" type="text/css" media="screen" href="/assets/css/menu.css?v=<?php print VERSION; ?>" />

    <style>
        body {
            position: relative;
            display: block;
            margin: unset;
            width: 100%;
            height: 100vh;
            overflow-x: hidden;
            overflow-y: auto;
        }

        .menu .group .item.text {
            font-family: "Calibri";
        }
        
        .menu .group t {
            font-size: 15px;
        }

        body > div > div > div.item h1,
        body > div > div > div.item h2,
        body > div > div > div.item h3,
        body > div > div > div.item h4,
        body > div > div > div.item ul,
        body > div > div > div.item pre {
            margin: unset;
        }

        li {
            padding: 4px 0;
        }

        pre {
            width: 100%;
            overflow: auto;
            font-family: monospace;
        }
    </style>

</head>

<body>

    <div class="menu">
        <div class="group home">
            <t class="title big">License</t>
            <t class="title small">List of License in this project</t>
            <div class="space"></div>
        </div>

        <div class="group file">
            <t class="title">Main</t>
            <t class="title small">MIT (<a href="/LICENSE" target="_blank" rel="noopener">LICENSE</a>) (<a href="https://tldrlegal.com/license/mit-license" target="_blank" rel="noopener">tl;dr</a>)</t>
            <t class="title small">Belikhun</t>

            <div class="item lr info">
                <t class="left"><h3>Copyright (c) 2018-2019 Belikhun</h3></t>
            </div>

            <div class="item text">
                Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
            </div>

            <div class="item text">
                The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
            </div>

            <div class="item lr warning">
                <t class="left">
                    THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
                </t>
                <div class="right"></div>
            </div>
        </div>

        <div class="group file">
            <t class="title">Sounds</t>
            <t class="title small">CC-BY-NC 4.0 (<a href="/assets/sounds/LICENSE.md" target="_blank" rel="noopener">LICENSE.md</a>) (<a href="https://creativecommons.org/licenses/by-nc/4.0/legalcode" target="_blank" rel="noopener">tl;dr</a>)</t>
            <t class="title small">ppy Pty. Ltd</t>

            <div class="item lr info">
                <t class="left">
                    <h3>creative commons</h3>
                    <h2>Attribution-NonCommercial 4.0 International</h2>
                </t>
            </div>

            <div class="item text">Creative Commons Corporation (“Creative Commons”) is not a law firm and does not provide legal services or legal advice. Distribution of Creative Commons public licenses does not create a lawyer-client or other relationship. Creative Commons makes its licenses and related information available on an “as-is” basis. Creative Commons gives no warranties regarding its licenses, any material licensed under their terms and conditions, or any related information. Creative Commons disclaims all liability for damages resulting from their use to the fullest extent possible.</div>

            <div class="item text"><h3>Using Creative Commons Public Licenses</h3></div>
            <div class="item text">Creative Commons public licenses provide a standard set of terms and conditions that creators and other rights holders may use to share original works of authorship and other material subject to copyright and certain other rights specified in the public license below. The following considerations are for informational purposes only, are not exhaustive, and do not form part of our licenses.</div>
            <div class="item text">
                <ul>
                    <li><b>Considerations for licensors:</b> Our public licenses are intended for use by those authorized to give the public permission to use material in ways otherwise restricted by copyright and certain other rights. Our licenses are irrevocable. Licensors should read and understand the terms and conditions of the license they choose before applying it. Licensors should also secure all rights necessary before applying our licenses so that the public can reuse the material as expected. Licensors should clearly mark any material not subject to the license. This includes other CC-licensed material, or material used under an exception or limitation to copyright. <a href="http://wiki.creativecommons.org/Considerations_for_licensors_and_licensees#Considerations_for_licensors">More considerations for licensors</a></li>
                    <li><b>Considerations for the public:</b> By using one of our public licenses, a licensor grants the public permission to use the licensed material under specified terms and conditions. If the licensor’s permission is not necessary for any reason–for example, because of any applicable exception or limitation to copyright–then that use is not regulated by the license. Our licenses grant only permissions under copyright and certain other rights that a licensor has authority to grant. Use of the licensed material may still be restricted for other reasons, including because others have copyright or other rights in the material. A licensor may make special requests, such as asking that all changes be marked or described. Although not required by our licenses, you are encouraged to respect those requests where reasonable. <a href="http://wiki.creativecommons.org/Considerations_for_licensors_and_licensees#Considerations_for_licensees">More considerations for the public</a></li>
                </ul>
            </div>

            <div class="item lr info">
                <t class="left">
                    <h2>Creative Commons Attribution-NonCommercial 4.0 International Public License</h2>
                </t>
            </div>

            <div class="item text">By exercising the Licensed Rights (defined below), You accept and agree to be bound by the terms and conditions of this Creative Commons Attribution-NonCommercial 4.0 International Public License (“Public License”). To the extent this Public License may be interpreted as a contract, You are granted the Licensed Rights in consideration of Your acceptance of these terms and conditions, and the Licensor grants You such rights in consideration of benefits the Licensor receives from making the Licensed Material available under these terms and conditions.</div>
            
            <div class="item text"><h3>Section 1 – Definitions.</h3></div>
            <div class="item text">
                <ul>
                    <li>a. <b>Adapted Material</b> means material subject to Copyright and Similar Rights that is derived from or based upon the Licensed Material and in which the Licensed Material is translated, altered, arranged, transformed, or otherwise modified in a manner requiring permission under the Copyright and Similar Rights held by the Licensor. For purposes of this Public License, where the Licensed Material is a musical work, performance, or sound recording, Adapted Material is always produced where the Licensed Material is synched in timed relation with a moving image.</li>
                    <li>b. <b>Adapter’s License</b> means the license You apply to Your Copyright and Similar Rights in Your contributions to Adapted Material in accordance with the terms and conditions of this Public License.</li>
                    <li>c. <b>Copyright and Similar Rights</b> means copyright and/or similar rights closely related to copyright including, without limitation, performance, broadcast, sound recording, and Sui Generis Database Rights, without regard to how the rights are labeled or categorized. For purposes of this Public License, the rights specified in Section 2(b)(1)-(2) are not Copyright and Similar Rights.</li>
                    <li>d. <b>Effective Technological Measures</b> means those measures that, in the absence of proper authority, may not be circumvented under laws fulfilling obligations under Article 11 of the WIPO Copyright Treaty adopted on December 20, 1996, and/or similar international agreements.</li>
                    <li>e. <b>Exceptions and Limitations</b> means fair use, fair dealing, and/or any other exception or limitation to Copyright and Similar Rights that applies to Your use of the Licensed Material.</li>
                    <li>f. <b>Licensed Material</b> means the artistic or literary work, database, or other material to which the Licensor applied this Public License.</li>
                    <li>g. <b>Licensed Rights</b> means the rights granted to You subject to the terms and conditions of this Public License, which are limited to all Copyright and Similar Rights that apply to Your use of the Licensed Material and that the Licensor has authority to license.</li>
                    <li>h. <b>Licensor</b> means the individual(s) or entity(ies) granting rights under this Public License.</li>
                    <li>i. <b>NonCommercial</b> means not primarily intended for or directed towards commercial advantage or monetary compensation. For purposes of this Public License, the exchange of the Licensed Material for other material subject to Copyright and Similar Rights by digital file-sharing or similar means is NonCommercial provided there is no payment of monetary compensation in connection with the exchange.</li>
                    <li>j. <b>Share</b> means to provide material to the public by any means or process that requires permission under the Licensed Rights, such as reproduction, public display, public performance, distribution, dissemination, communication, or importation, and to make material available to the public including in ways that members of the public may access the material from a place and at a time individually chosen by them.</li>
                    <li>k. <b>Sui Generis Database Rights</b> means rights other than copyright resulting from Directive 96/9/EC of the European Parliament and of the Council of 11 March 1996 on the legal protection of databases, as amended and/or succeeded, as well as other essentially equivalent rights anywhere in the world.</li>
                    <li>l. <b>You</b> means the individual or entity exercising the Licensed Rights under this Public License. Your has a corresponding meaning.</li>
                </ul>
            </div>

            <div class="item text"><h3>Section 2 – Scope.</h3></div>
            <div class="item text"><h4>a. <i>License grant.</i></h4></div>
            <div class="item text"><pre>
1. Subject to the terms and conditions of this Public License, the Licensor hereby grants You a worldwide, royalty-free, non-sublicensable, non-exclusive, irrevocable license to exercise the Licensed Rights in the Licensed Material to:

    A. reproduce and Share the Licensed Material, in whole or in part, for NonCommercial purposes only; and

    B. produce, reproduce, and Share Adapted Material for NonCommercial purposes only.

2. __Exceptions and Limitations.__ For the avoidance of doubt, where Exceptions and Limitations apply to Your use, this Public License does not apply, and You do not need to comply with its terms and conditions.

3. __Term.__ The term of this Public License is specified in Section 6(a).

4. __Media and formats; technical modifications allowed.__ The Licensor authorizes You to exercise the Licensed Rights in all media and formats whether now known or hereafter created, and to make technical modifications necessary to do so. The Licensor waives and/or agrees not to assert any right or authority to forbid You from making technical modifications necessary to exercise the Licensed Rights, including technical modifications necessary to circumvent Effective Technological Measures. For purposes of this Public License, simply making modifications authorized by this Section 2(a)(4) never produces Adapted Material.

5. __Downstream recipients.__

    A. __Offer from the Licensor – Licensed Material.__ Every recipient of the Licensed Material automatically receives an offer from the Licensor to exercise the Licensed Rights under the terms and conditions of this Public License.

    B. __No downstream restrictions.__ You may not offer or impose any additional or different terms or conditions on, or apply any Effective Technological Measures to, the Licensed Material if doing so restricts exercise of the Licensed Rights by any recipient of the Licensed Material.

6. __No endorsement.__ Nothing in this Public License constitutes or may be construed as permission to assert or imply that You are, or that Your use of the Licensed Material is, connected with, or sponsored, endorsed, or granted official status by, the Licensor or others designated to receive attribution as provided in Section 3(a)(1)(A)(i).
            </pre></div>
            <div class="item text"><h4>b. <i>Other rights.</i></h4></div>
            <div class="item text"><pre>
1. Moral rights, such as the right of integrity, are not licensed under this Public License, nor are publicity, privacy, and/or other similar personality rights; however, to the extent possible, the Licensor waives and/or agrees not to assert any such rights held by the Licensor to the limited extent necessary to allow You to exercise the Licensed Rights, but not otherwise.

2. Patent and trademark rights are not licensed under this Public License.

3. To the extent possible, the Licensor waives any right to collect royalties from You for the exercise of the Licensed Rights, whether directly or through a collecting society under any voluntary or waivable statutory or compulsory licensing scheme. In all other cases the Licensor expressly reserves any right to collect such royalties, including when the Licensed Material is used other than for NonCommercial purposes.
            </pre></div>

            <div class="item text"><h3>Section 3 – License Conditions.</h3></div>
            <div class="item text">Your exercise of the Licensed Rights is expressly made subject to the following conditions.</div>
            <div class="item text"><h4>a. <i>Attribution.</i></h4></div>
            <div class="item text"><pre>
1. If You Share the Licensed Material (including in modified form), You must:

    A. retain the following if it is supplied by the Licensor with the Licensed Material:

        i. identification of the creator(s) of the Licensed Material and any others designated to receive attribution, in any reasonable manner requested by the Licensor (including by pseudonym if designated);

        ii. a copyright notice;

        iii. a notice that refers to this Public License;

        iv. a notice that refers to the disclaimer of warranties;

        v. a URI or hyperlink to the Licensed Material to the extent reasonably practicable;

    B. indicate if You modified the Licensed Material and retain an indication of any previous modifications; and

    C. indicate the Licensed Material is licensed under this Public License, and include the text of, or the URI or hyperlink to, this Public License.

2. You may satisfy the conditions in Section 3(a)(1) in any reasonable manner based on the medium, means, and context in which You Share the Licensed Material. For example, it may be reasonable to satisfy the conditions by providing a URI or hyperlink to a resource that includes the required information.

3. If requested by the Licensor, You must remove any of the information required by Section 3(a)(1)(A) to the extent reasonably practicable.

4. If You Share Adapted Material You produce, the Adapter's License You apply must not prevent recipients of the Adapted Material from complying with this Public License.
            </pre></div>

            <div class="item text"><h3>Section 4 – Sui Generis Database Rights.</h3></div>
            <div class="item text">Where the Licensed Rights include Sui Generis Database Rights that apply to Your use of the Licensed Material:</div>
            <div class="item text">a. for the avoidance of doubt, Section 2(a)(1) grants You the right to extract, reuse, reproduce, and Share all or a substantial portion of the contents of the database for NonCommercial purposes only;</div>
            <div class="item text">b. if You include all or a substantial portion of the database contents in a database in which You have Sui Generis Database Rights, then the database in which You have Sui Generis Database Rights (but not its individual contents) is Adapted Material; and</div>
            <div class="item text">c. You must comply with the conditions in Section 3(a) if You Share all or a substantial portion of the contents of the database.</div>
            <div class="item text">For the avoidance of doubt, this Section 4 supplements and does not replace Your obligations under this Public License where the Licensed Rights include other Copyright and Similar Rights.</div>

            <div class="item text"><h3>Section 5 – Disclaimer of Warranties and Limitation of Liability.</h3></div>
            <div class="item text">a. <b>Unless otherwise separately undertaken by the Licensor, to the extent possible, the Licensor offers the Licensed Material as-is and as-available, and makes no representations or warranties of any kind concerning the Licensed Material, whether express, implied, statutory, or other. This includes, without limitation, warranties of title, merchantability, fitness for a particular purpose, non-infringement, absence of latent or other defects, accuracy, or the presence or absence of errors, whether or not known or discoverable. Where disclaimers of warranties are not allowed in full or in part, this disclaimer may not apply to You.</b></div>
            <div class="item text">b. <b>To the extent possible, in no event will the Licensor be liable to You on any legal theory (including, without limitation, negligence) or otherwise for any direct, special, indirect, incidental, consequential, punitive, exemplary, or other losses, costs, expenses, or damages arising out of this Public License or use of the Licensed Material, even if the Licensor has been advised of the possibility of such losses, costs, expenses, or damages. Where a limitation of liability is not allowed in full or in part, this limitation may not apply to You.</b></div>
            <div class="item text">c. The disclaimer of warranties and limitation of liability provided above shall be interpreted in a manner that, to the extent possible, most closely approximates an absolute disclaimer and waiver of all liability.</div>

            <div class="item text"><h3>Section 6 – Term and Termination.</h3></div>
            <div class="item text">a. This Public License applies for the term of the Copyright and Similar Rights licensed here. However, if You fail to comply with this Public License, then Your rights under this Public License terminate automatically.</div>
            <div class="item text">b. Where Your right to use the Licensed Material has terminated under Section 6(a), it reinstates:</div>
            <div class="item text"><pre>
1. automatically as of the date the violation is cured, provided it is cured within 30 days of Your discovery of the violation; or

2. upon express reinstatement by the Licensor.

For the avoidance of doubt, this Section 6(b) does not affect any right the Licensor may have to seek remedies for Your violations of this Public License.
            </pre></div>
            <div class="item text">c. For the avoidance of doubt, the Licensor may also offer the Licensed Material under separate terms or conditions or stop distributing the Licensed Material at any time; however, doing so will not terminate this Public License.</div>
            <div class="item text">d. Sections 1, 5, 6, 7, and 8 survive termination of this Public License.</div>

            <div class="item text"><h3>Section 7 – Other Terms and Conditions.</h3></div>
            <div class="item text">a. The Licensor shall not be bound by any additional or different terms or conditions communicated by You unless expressly agreed.</div>
            <div class="item text">b. Any arrangements, understandings, or agreements regarding the Licensed Material not stated herein are separate from and independent of the terms and conditions of this Public License.</div>

            <div class="item text"><h3>Section 8 – Interpretation.</h3></div>
            <div class="item text">a. For the avoidance of doubt, this Public License does not, and shall not be interpreted to, reduce, limit, restrict, or impose conditions on any use of the Licensed Material that could lawfully be made without permission under this Public License.</div>
            <div class="item text">b. To the extent possible, if any provision of this Public License is deemed unenforceable, it shall be automatically reformed to the minimum extent necessary to make it enforceable. If the provision cannot be reformed, it shall be severed from this Public License without affecting the enforceability of the remaining terms and conditions.</div>
            <div class="item text">c. No term or condition of this Public License will be waived and no failure to comply consented to unless expressly agreed to by the Licensor.</div>
            <div class="item text">d. Nothing in this Public License constitutes or may be interpreted as a limitation upon, or waiver of, any privileges and immunities that apply to the Licensor or You, including from the legal processes of any jurisdiction or authority.</div>
            <div class="item text"><pre>
Creative Commons is not a party to its public licenses. Notwithstanding, Creative Commons may elect to apply one of its public licenses to material it publishes and in those instances will be considered the “Licensor.” Except for the limited purpose of indicating that material is shared under a Creative Commons public license or as otherwise permitted by the Creative Commons policies published at [creativecommons.org/policies](http://creativecommons.org/policies), Creative Commons does not authorize the use of the trademark “Creative Commons” or any other trademark or logo of Creative Commons without its prior written consent including, without limitation, in connection with any unauthorized modifications to any of its public licenses or any other arrangements, understandings, or agreements concerning use of licensed material. For the avoidance of doubt, this paragraph does not form part of the public licenses.

Creative Commons may be contacted at creativecommons.org
            </pre></div>

        </div>

    </div>

    <!-- Library -->
    <script type="text/javascript" src="/assets/js/belibrary.js?v=<?php print VERSION; ?>"></script>
    <script type="text/javascript">
        if (cookie.get("__darkMode") === "true")
            document.body.classList.add("dark");

        if (window.frameElement)
            document.body.classList.add("embeded");
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-124598427-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments) }
        gtag("js", new Date());

        gtag("config", "UA-124598427-1");
    </script>
</body>

</html>