/*
 * Prepare:
 *   Generate WebhookURL from here and replace webhookUrl variable: https://slack.com/services/new/incoming-webhook
 * NOTE:
 *   Crakers can send enormous notifies with your webhookURL.
*/

/***********************
 * Settings Start
 **********************/
var webhookUrl = 'https://hooks.slack.com/services/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';
var nameId = '#slackInputName';
var emailId = '#slackInputEmail';
var messageId = '#slackInputMessage';
/***********************
 * Settings End
 **********************/

function contactBody() {
  return "<!channel> From: " + window.location.href + "\nName: " + $(nameId).val() +
         "\nEmail: " + $(emailId).val() + "\nBody: " + $(messageId).val();
}
function slackNotify (webhookUrl, text) {
  payload = '{"text": "' + text + '" }';
  $.post(webhookUrl, 'payload=' + payload, function() {
  })
  .done(function() {
    swal("Success", "Thanks for contacting", "success");
    $(nameId).val("");
    $(emailId).val("");
    $(messageId).val("");
  })
  .fail(function() {
    swal("Failed", "Check your network condition, try again later.", "error");
  });
}
$("#submitSlackNotify").submit(function() {
  return slackNotify(webhookUrl, contactBody());
});