---
title: Metafields are empty
sidebar_position: 5
---

# Metafields are empty

If Metafield columns in Mipler appear empty despite having data in Shopify, it's likely that **Metafield synchronization
** isn’t enabled in your Mipler account settings. By default, Metafields are not synchronized in Mipler because not all
clients require this resource, and enabling it can significantly impact server performance.

---

## Steps to Resolve

1. Navigate to the **Settings** page in your Mipler account.
2. Scroll to the **Metafields Synchronization** section at the bottom of the page:
   <img src="/docs/img/troubleshoot/metafields-are-empty/s1_1.png" />
3. Enable the resources you need to begin synchronization.

---

### Important Notes

- The time required for synchronization depends directly on the volume of your data.
- Once enabled, Metafield data will be synchronized, and the previously empty columns in your reports should display the
  expected data.