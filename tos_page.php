<?php
require_once "views/authView.php";
$view = new authView();
sec_session_start();
$view->show('header');

echo('
<br /><a href="signup.php" class="small button">Back</a>

<p><b>Terms and Conditions</b></p> 
  
<p>In using this website you are deemed to have read and agreed to the following terms and conditions:</p> 

<p>The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and any or all Agreements:</p>

<p>&quot;Client&quot;, &quot;You&quot; and &quot;Your&quot; refers to you, the person accessing this website and accepting the Company&#39;s terms and conditions. &quot;The Company&quot;, &quot;Ourselves&quot;, &quot;We&quot; and &quot;Us&quot;, refers to our Company. &quot;Party&quot;, &quot;Parties&quot;, or &quot;Us&quot;, refers to both the Client and ourselves, or either the Client or ourselves. All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner, whether by formal meetings of a fixed duration, or any other means, for the express purpose of meeting the Client&#39;s needs in respect of provision of the Company&#39;s stated services/products, in accordance with and subject to, prevailing English Law. Any use of the above terminology or other words in the singular, plural, capitalisation and/or he/she or they, are taken as interchangeable and therefore as referring to same.</p>   

<p><b>Privacy Statemen</b></p>
 
<p>We are committed to protecting your privacy. Authorized employees within the company on a need to know basis only use any information collected from individual customers. We constantly review our systems and data to ensure the best possible service to our customers. Parliament has created specific offences for unauthorised actions against computer systems and data. We will investigate any such actions with a view to prosecuting and/or taking civil proceedings to recover damages against those responsible</p>
 
  
<p><b>Confidentiality</b></p> 
<p>We are registered under the Data Protection Act 1998 and as such, any information concerning the Client and their respective Client Records may be passed to third parties. However, Client records are regarded as confidential and therefore will not be divulged to any third party, other than [our manufacturer/supplier(s) and] if legally required to do so to the appropriate authorities.</p> 

<p>Clients have the right to request sight of, and copies of any and all Client Records we keep, on the proviso that we are given reasonable notice of such a request. Clients are requested to retain copies of any literature issued in relation to the provision of our services. Where appropriate, we shall issue Client&#39;s with appropriate written information, handouts or copies of records as part of an agreed contract, for the benefit of both parties.</p> 

<p>We will not sell, share, or rent your personal information to any third party or use your e-mail address for unsolicited mail. Any emails sent by this Company will only be in connection with the provision of agreed services and products.</p> 

<p><b>Disclaimer Exclusions and Limitations</b></p>
 
<p>The information on this web site is provided on an &quot;as is&quot; basis. To the fullest extent permitted by law, this Company:</p> 

<p>excludes all representations and warranties relating to this website and its contents or which is or may be provided by any affiliates or any other third party, including in relation to any inaccuracies or omissions in 
this website and/or the Company&#39;s literature; and</p> 
 

<p>excludes all liability for damages arising out of or in connection with your use of this website. This includes, without limitation, direct loss, loss of business or profits (whether or not the loss of such profits was foreseeable, arose in the normal course of things or you have advised this Company of the possibility of such potential loss), damage caused to your computer, computer software, systems and programs and the data thereon or any other direct or indirect, consequential and incidental damages.  This Company does not however exclude liability for death or personal injury caused by its negligence. The above exclusions and limitations apply only to the extent permitted by law. None of your statutory rights as a consumer are affected.</p>  
  
<p><b>Payment</b></p>

<p>Cash or Personal Cheque with Bankers Card, all major Credit/Debit Cards, Bankers Draft or BACS Transfer are all acceptable methods of payment. Our Terms are payment in full within thirty days. All goods remain the property of the Company until paid for in full. Monies that remains outstanding by the due date will incur late payment interest at the rate of 2% above the prevailing Bank of England&#39;s base rate on the outstanding balance until such time as the balance is paid in full and final settlement. We reserve the right to seek recovery of any monies remaining unpaid sixty days from the date of invoice via collection Agencies and/or through the Small Claims Court in the event that the outstanding balance does not exceed £3000. In such circumstances, you shall be liable for any and all additional administrative and/or court costs. Returned cheques will incur a £25 charge to cover banking fees and administrative costs. In an instance of a second Returned cheque, we reserve the right to terminate the arrangement and, if agreed to, we shall insist on future cash transactions only. Consequently, all bookings and/or transactions and agreements entered into will cease with immediate effect until such time as any and all outstanding monies are recovered in full.</p>    
  
<p><b>Cancellation Policy</b></p>
 
<p>Minimum 24 hours notice of cancellation required. Notification for instanc
e, in person, via email, mobile phone, text message‟ and/or fax, or any other means will be accepted subject to confirmation in writing. We reserve the right to 
levy a £30 charge to cover any subsequent administrative expenses.   
Termination of Agreements and Refunds Policy</p>

<p>Both the Client and ourselves have the right to terminate any Services Agreement for any reason, including the ending of services that are already underway. No refunds shall be offered, where a Service is deemed to have begun and is, for all intents and purposes, underway. Any monies that have been paid to us which constitute payment in respect of the provision of unused Services, shall be refunded.</p> 

<p><b>Availability</b></p> 
 
<p>Unless otherwise stated, the services featured on this website are only available within the United Kingdom, or in relation to postings from the United Kingdom. All advertising is intended solely for the United Kingdom market. You are solely responsible for evaluating the fitness for a particular purpose of any downloads, programs and text available through this site. Redistribution or republication of any part of this site or its content is prohibited, including such by framing or other similar or any other means, without the express written consent of the Company. The Company does not warrant that the service from this site will be uninterrupted, timely or error free, although it is provided to the best ability. By using this service you thereby indemnify this Company, its employees, agents and affiliates against any loss or damage, in whatever manner, howsoever caused.</p>
 
  
<p><b>Log Files</b></p>

<p>We use IP addresses to analyse trends, administer the site, track user‟s movement, and gather broad demographic information for aggregate use. IP addresses are not linked to personally identifiable information. Additionally, for systems administration, detecting usage patterns and troubleshooting purposes, our web servers automatically log standard access information including browser type, access times/open mail, URL requested, and referral URL. This information is not shared with third parties and is used only within this Company on a need-to-know basis. Any individually identifiable information related to this data will never be used in any way different to that stated above without your explicit permission.</p>

<p><b>Cookies</b></p>

<p>Like most interactive web sites this Company‟s website [or ISP] uses cookies to enable us to retrieve user details for each visit. Cookies are used in some areas of our site to enable the functionality of this area and ease of use for those people visiting. Some of our affiliate partners may also use cookies.</p>
   
<p><b>Links to this website</b></p>
 
<p>You may not create a link to any page of this website without our prior written consent. If you do create a link to a page of this website you do so at your own risk and the exclusions and limitations set out above will apply to your use of this website by linking to it.</p>  
 
<p><b>Links from this website</b></p>
 
<p>We do not monitor or review the content of other party‟s websites w
hich are linked to from this website. Opinions expressed or material appearing on such websites are not necessarily shared or endorsed by us and should not be regarded as the publisher of such opinions or material. Please be aware that we are not responsible for the privacy practices, or content, of these sites. We encourage our users to be aware when they leave our site & to read the privacy statements of these sites. You should evaluate the security and trustworthiness of any other site connected to this site or accessed through this site yourself, before disclosing any personal information to them. This Company will not accept any responsibility for any loss or damage in whatever manner, howsoever caused, resulting from your disclosure to third parties of personal information.</p> 

<p><b>Copyright Notice</b></p>
  
<p>Copyright and other relevant intellectual property rights exists on all text relating to the Company&quot;s services and the 
full content of this website.<br />

This Company‟s logo is a registered trademark of this Company
 in the United Kingdom and other countries. The brand names and specific services of this Company featured on this web site are trade marked</p>

<p><b>Communication</b></p>

<p>We have several different e-mail addresses for different queries. These, & other contact information, can be found on our contact us form</p>
 
<p>link on our website or via Company literature or via the Company&#39;s stated telephone, facsimile or mobile telephone numbers.</p> 
 
<p>This company is registered in United States and Europe, Number 11111111, registered office 123 Any Street, Anytown AB2 3CD.</p>  

<p><b>Force Majeure</b></p>

<p>Neither party shall be liable to the other for any failure to perform any obligation under any Agreement which is due to an event beyond the control of such party including but not limited to any Act of God, terrorism, war, Political insurgence, insurrection, riot, civil unrest, act of civil or military authority, uprising, earthquake, flood or any other natural or man made eventuality outside of our control, which causes the termination of an agreement or contract entered into, nor which could have been reasonably foreseen. Any Party affected by such event shall forthwith inform the other Party of the same and shall use all reasonable endeavours to comply with the terms and conditions of any Agreement contained herein.</p>   

<p><b>Waiver</b></p>

<p>Failure of either Party to insist upon strict performance of any provision of this or any Agreement or the failure of either Party to exercise any right or remedy to which it, he or they are entitled hereunder shall not constitute a waiver thereof and shall not cause a diminution of the obligations under this or any Agreement. No waiver of any of the provisions of this or any Agreement shall be effective unless it is expressly stated to be such and signed by both Parties.</p> 
 
 
<p><b>General</b></p>

<p>The laws of England and Wales govern these terms and conditions. By accessing this website [and using our services/buying our products] you consent to these terms and conditions and to the exclusive jurisdiction of the English courts in all disputes arising out of such access. If any of these terms are deemed invalid or unenforceable for any reason (including, but not limited to the exclusions and limitations set out above), then the invalid or unenforceable provision will be severed from these terms and the remaining terms will continue to apply. Failure of the Company to enforce any of the provisions set out in these Terms and Conditions and any Agreement, or failure to exercise any option to terminate, shall not be construed as waiver of such provisions and shall not affect the validity of these Terms and Conditions or of any Agreement or any part thereof, or the right thereafter to enforce each and every provision. These Terms and Conditions shall not be amended, modified, varied or supplemented except in writing and signed by duly authorised representatives of the Company.</p>
 
  
<p><b>Notification of Changes</b></p>
 
<p>The Company reserves the right to change these conditions from time to time as it sees fit and your continued use of the site will signify your acceptance of any adjustment to these terms. If there are any changes to our privacy policy, we will announce that these changes have been made on our home page and on other key pages on our site. If there are any changes in how we use our site customers‟ Personally Identifiable Information, notification by e-mail or postal mail will be made to those affected by this change. Any changes to our privacy policy will be posted on our web site 30 days prior to these changes taking place. You are therefore advised to re-read this statement on a regular basis</p>

<p>These terms and conditions form part of the Agreement between the Client and ourselves. Your accessing of this website and/or undertaking of a booking or Agreement indicates your understanding, agreement to and acceptance, of the Disclaimer Notice and the full Terms and Conditions contained herein. Your statutory Consumer Rights are unaffected.</p>

<p>&copy; InterstPoint 2013 All Rights Reserved</p>
<a href="signup.php" class="small button">Back</a>');

$view->show('footer');