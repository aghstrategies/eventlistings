# CiviCRM Event Listings

This extension sets up two searchkit/afform lists to display Events:

1. Upcoming Events: Public list of upcoming events, this shortcode can be used to embed it on a wordpress page: `[civicrm component="afform" name="afsearchUpcomingEvents"]`
2. Past Events

## Requirements

* PHP v7.4+
* CiviCRM (*FIXME: Version number*)

## Installation (Web UI)

Learn more about installing CiviCRM extensions in the [CiviCRM Sysadmin Guide](https://docs.civicrm.org/sysadmin/en/latest/customize/extensions/).

## Installation (CLI, Zip)

Sysadmins and developers may download the `.zip` file for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
cd <extension-dir>
cv dl eventlistings@https://github.com/FIXME/eventlistings/archive/master.zip
```
or
```bash
cd <extension-dir>
cv dl eventlistings@https://lab.civicrm.org/extensions/eventlistings/-/archive/main/eventlistings-main.zip
```

## Installation (CLI, Git)

Sysadmins and developers may clone the [Git](https://en.wikipedia.org/wiki/Git) repo for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
git clone https://github.com/FIXME/eventlistings.git
cv en eventlistings
```
or
```bash
git clone https://lab.civicrm.org/extensions/eventlistings.git
cv en eventlistings
```

## Getting Started

After installing the extension one can view the upcoming events listing by going to: https://yoursite.com/civicrm/upcomingevents and embed it on a page with this shortcode: `[civicrm component="afform" name="afsearchUpcomingEvents"]`

## Known Issues
