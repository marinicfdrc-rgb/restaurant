function showError(fieldId, message) {
  const error = document.getElementById(fieldId + "-error");

  if (error) {
    error.textContent = message;

    error.classList.remove("hidden");
  }
}

function clearError(fieldId) {
  const error = document.getElementById(fieldId + "-error");

  if (error) {
    error.textContent = "";

    error.classList.add("hidden");
  }
}

function clearFormErrors() {
  document.querySelectorAll("[id$='-error']").forEach((error) => {
    error.textContent = "";

    error.classList.add("hidden");
  });
}

function validateField(fieldId, rules) {
  const field = document.getElementById(fieldId);

  if (!field) return true;

  const value = field.value.trim();

  for (const rule of rules) {
    if (rule.type === "required" && value === "") {
      showError(fieldId, rule.message);

      return false;
    }

    if (rule.type === "min" && value.length < rule.value) {
      showError(fieldId, rule.message);

      return false;
    }

    if (rule.type === "email" && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value)) {
      showError(fieldId, rule.message);

      return false;
    }

    if (rule.type === "number" && isNaN(value)) {
      showError(fieldId, rule.message);

      return false;
    }

    if (rule.type === "minNumber" && Number(value) < rule.value) {
      showError(fieldId, rule.message);

      return false;
    }

    if (rule.type === "maxNumber" && Number(value) > rule.value) {
      showError(fieldId, rule.message);

      return false;
    }

    if (
      rule.type === "match" &&
      value !== document.getElementById(rule.value).value
    ) {
      showError(fieldId, rule.message);

      return false;
    }
  }

  clearError(fieldId);

  return true;
}
